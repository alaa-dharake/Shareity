<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MealRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealRequestController extends Controller
{
    public function __construct()
    {
        // Apply middleware to routes
        $this->middleware('is_user')->only(['create', 'store', 'index']);
        $this->middleware('is_chef')->only(['manage', 'updateStatus']);
    }

    public function create(User $chef)
    {
        return view('meal_requests.create', compact('chef'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'chef_id' => 'required|exists:users,id',
            'meal_name' => 'required|string|max:255',
            'requested_date' => 'required|date',
            'requested_time' => 'required|date_format:H:i',
        ]);

        MealRequest::create([
            'user_id' => auth()->id(),
            'chef_id' => $request->chef_id,
            'meal_name' => $request->meal_name,
            'requested_date' => $request->requested_date,
            'requested_time' => $request->requested_time,
        ]);

        return redirect()->route('chefs.show', $request->chef_id)->with('success', 'Meal request sent successfully!');
    }

    public function accept(MealRequest $meal_request)
    {
        // Implement acceptance logic here (e.g., update status)
        $meal_request->update(['status' => 'accepted']);

        return back()->with('success', 'Meal request accepted.');
    }

    public function reject(MealRequest $meal_request)
    {
        // Implement rejection logic here (e.g., update status)
        $meal_request->update(['status' => 'rejected']);

        return back()->with('success', 'Meal request rejected.');
    }
    
    public function index()
    {
        // Fetch all meal requests associated with the authenticated user
        $mealRequests = MealRequest::where('user_id', auth()->id())->get();
        // Fetch all chefs (users with role 'chef')
        $chefs = User::where('role', 'chef')->get();

        return view('meal_requests.index', compact('mealRequests', 'chefs'));
    }

    public function manage()
    {
        // Fetch all meal requests where the authenticated user is the chef
        $mealRequests = MealRequest::where('chef_id', auth()->id())->get();
        $chef = Auth::user();

        return view('meal_requests.manage', compact('mealRequests', 'chef'));
    }

    public function updateStatus(Request $request, MealRequest $mealRequest)
    {
        // Update the status of a meal request
        $mealRequest->update(['status' => $request->status]);

        // Redirect back to the manage page for meal requests
        return redirect()->route('meal_requests.manage');
    }
}
