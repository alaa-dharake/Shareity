<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }

    public function index()
    {
        $currentDate = Carbon::today();
        $campaigns = Campaign::whereDate('end_date', '>=', $currentDate)->get();
       
        return view('campaigns', ['campaigns' => $campaigns]);
    }

    public function donate(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        try {
            Log::info('Fetching campaign with ID: ' . $id);
            $campaign = Campaign::findOrFail($id);

            Log::info('Campaign fetched successfully.', ['campaign' => $campaign]);

            $campaign->donated_amount += $request->amount;

            // Save the campaign, triggering the updateNumberOfMeals through the model event
            $campaign->save();

            // Log the updated values
            Log::info("After updating meals: ", [
                'number_of_meals' => $campaign->number_of_meals
            ]);

            return redirect()->back()->with('success', 'Thank you for your donation!');
        } catch (\Exception $e) {
            Log::error('Error donating to campaign: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error donating to campaign: ' . $e->getMessage());
        }
    }

    public function myCampaigns()
    {
        $user = Auth::user();
        $campaigns = $user ? Campaign::where('author_id', $user->id)->get() : collect();
        return view('campaigns.index', ['campaigns' => $campaigns]);
    }
}
