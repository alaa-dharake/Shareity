<?php

namespace App\Http\Controllers\Backend;

use App\Models\City;
use App\Models\Dish;
use App\Models\User;
use App\Models\State;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        // Fetch user counts per state where role is 'user'
        $statesData = State::withCount(['users' => function ($query) {
            $query->where('role', 'user');
        }])
        ->get()
        ->map(function ($state) {
            return ['state' => $state->name, 'user_count' => $state->users_count];
        });

        // Fetch user counts per state where role is 'chef'
        $chefsData = State::withCount(['users' => function ($query) {
            $query->where('role', 'chef');
        }])
        ->get()
        ->map(function ($state) {
            return ['state' => $state->name, 'chef_count' => $state->users_count];
        });

        // Fetch user growth in the current year
        $currentYear = Carbon::now()->year;
        $userGrowthData = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('role', 'user') // Filter users where role is 'user'
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        // Fetch chef growth in the current year
        $chefGrowthData = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('role', 'chef')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        // Get the total number of active campaigns
        $activeCampaignsCount = Campaign::where('end_date', '<', Carbon::now())->count();

        // Get campaigns that end today
        $campaigns = Campaign::whereDate('end_date', Carbon::today())->get();

        // Prepare data for the chart (campaign names and number of meals)
        $campaignData = [
            'x' => ['Campaigns'],
            'download' => ['Meals']
        ];

        foreach ($campaigns as $campaign) {
            $campaignData['x'][] = $campaign->campaign_name; // Assuming 'campaign_name' is the field for campaign names
            $campaignData['download'][] = $campaign->number_of_meals; // Assuming 'number_of_meals' is the field for meals
        }

        // Count dishes that are sold out (quantity = 0)
        $soldDishesCount = Dish::where('quantity', 0)->count();

        // Pass the data to the view
        return view('admin.home', compact('statesData', 'chefsData', 'activeCampaignsCount', 'userGrowthData', 'chefGrowthData', 'campaignData', 'soldDishesCount'));
    }

    public function getUsers()
    {
        $users = User::all();
        $cities = City::all();
        $states = State::all();
        
        return view('admin.users', compact('users', 'cities', 'states'));
    }

    


    public function getMealsDistribution()
{
    $mealsDistribution = DB::table('dishes')
        ->select(DB::raw('count(*) as meal_count, categories.name as category_name'))
        ->join('categories', 'dishes.category_id', '=', 'categories.id')
        ->groupBy('categories.name')
        ->get();

    return response()->json($mealsDistribution);
}
public function getWeeklyDonations()
{
    $donations = DB::table('donations')
        ->select(DB::raw('DAYOFWEEK(created_at) as day_of_week'), DB::raw('SUM(donation_amount) as total_amount'))
        ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->groupBy(DB::raw('DAYOFWEEK(created_at)'))
        ->orderBy('day_of_week')
        ->get();

    return response()->json($donations);
}

public function getMonthlyMealsData()
{
    $mealsData = DB::table('campaigns')
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('SUM(number_of_meals) as meals_count'))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

    return response()->json($mealsData);
}



    
    
}
