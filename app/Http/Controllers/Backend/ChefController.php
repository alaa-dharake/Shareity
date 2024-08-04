<?php

namespace App\Http\Controllers\Backend;

use App\Models\City;
use App\Models\Dish;
use App\Models\User;
use App\Models\Order;
use App\Models\State;
use App\Models\Rating;
use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Services\CityService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->middleware('is_chef');
        $this->cityService = $cityService;
    }
    public function view_meals()
    {
        $user = auth()->user();
        $dishes = Dish::where('user_id', $user->id)->get();
        return view('chef.meals', compact('user', 'dishes'));
    }

    public function view_campaigns()
    {
        $user = Auth::user();
        $campaigns = Campaign::all();
        return view('campaigns.index', compact('campaigns', 'user'));
    }

    public function chef_index()
    {
        $user = Auth::user();
        $states = State::all();
        $cities = City::where('state_id', $user->state_id)->get();
        $userImagePath = asset('storage/avatars/' . ($user->image ?? 'avatar.png'));
    
        return view('chef.profile.edit', compact('user', 'states', 'cities', 'userImagePath'));
    }

    
    public function security()
    {
        return view('chef.security');
    }

  
    public function getCitiesByState($state_id)
    {
        $cities = $this->cityService->getCitiesByState($state_id);
        return response()->json($cities);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
    
        $user->fill($request->only(['name', 'lastName', 'username', 'email', 'state_id', 'city_id']));
    
        if ($request->hasFile('image')) {
            // Delete old image if it's not the default avatar
            if ($user->image && $user->image !== 'avatar.png') {
                Storage::delete('public/avatars/' . $user->image);
            }
    
            // Store new image
            $imagePath = $request->file('image')->store('avatars', 'public');
            $user->image = basename($imagePath);
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    
public function showOrders()
{
    // Assuming the authenticated user is the chef
    $chefId = auth()->user()->id;

    // Fetch orders where the dish belongs to the authenticated chef
    $orders = Order::with(['user', 'dish'])
        ->whereHas('dish', function ($query) use ($chefId) {
            $query->where('user_id', $chefId);
        })
        ->get();

    return view('chef.orders', compact('orders'));
}
public function showRatings()
    {
        // Get ratings where the authenticated user is the chef
        $ratings = Rating::where('chef_id', Auth::id())->get();

        return view('chef.ratings', ['ratings' => $ratings]);
    }

    public function destroyRating(Rating $rating)
    {
        // Ensure the authenticated user is the chef of the rating
        if ($rating->chef_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Delete the rating
        $rating->delete();

        return response()->json(['message' => 'Rating deleted successfully'], 200);
    }



    public function destroy(Request $request)
    {
        $user = Auth::user();

        // Perform any cleanup operations here, if necessary

        $user->delete();

        return redirect('/')->with('success', 'Your account has been deleted.');
    }
}
