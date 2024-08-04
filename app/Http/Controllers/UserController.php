<?php

// UserController.php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Dish;
use App\Models\User;
use App\Models\State;
use App\Models\Rating;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CityService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected $cityService;
    
    public function __construct(CityService $cityService)
    {
        $this->middleware('is_user');
        $this->cityService = $cityService;
    }
    /**
     * Show the user profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function viewstate($name)
    {
        if (State::where('name', $name)->exists()) {
            $state= State::where('name', $name)->first();
            
            // Assuming you want to pass all categories to the view
            $states = State::all();
            $dishes = Dish::all(); // Fetch all dishes
            $users = User::where('state_id', $state->id)->get();
            
            return view('user.chefs', compact('state', 'states', 'users', 'dishes'));
        } else {
            return redirect('/chefs')->with('status', 'Not Found');
        }
    }
    public function getChefs()
    {
        $states = State::all();
        $cities = City::all();
    
        // Fetch dishes with eager loading of user relationship
        $dishes = Dish::with('user')->get();
    
        // Fetch chefs with ratings relationship and calculate average rating
        $users = User::where('role', 'chef')
            ->with(['ratings', 'city', 'state'])
            ->paginate(5);
    
        // Add average rating calculation to each chef
        foreach ($users as $chef) {
            $chef->average_rating = $chef->ratings->avg('rating');
        }
    
        return view('user.chefs', compact('users', 'states', 'dishes'));
    }
    
    public function showChef($id)
    {
        // Fetch necessary data
        $user = auth()->user(); // Assuming you're getting the authenticated user
        $chef = User::findOrFail($id); // Example query to fetch chef data
        $states = State::all(); // Example query to fetch states
        $cities = City::all(); // Example query to fetch cities
        $dishes = Dish::all(); // Example query to fetch dishes
        $users =  User::all(); // Example query to fetch users
        
        // Calculate average rating (example)
        $averageRating = Rating::where('chef_id', $id)->avg('rating');
        
        // Load the view with data
        return view('user.chefs-show', compact('user', 'chef', 'states', 'cities', 'averageRating', 'dishes'));
    }
    
    public function user_index()
    {
        $user = Auth::user();
        $states = State::all();
        $cities = City::where('state_id', $user->state_id)->get();
        $userImagePath = asset('storage/avatars/' . ($user->image ?? 'avatar.png'));
    
        return view('user.profile.edit', compact('user', 'states', 'cities', 'userImagePath'));
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
    




    public function destroy(Request $request)
    {
        $user = Auth::user();

        // Perform any cleanup operations here, if necessary

        $user->delete();

        return redirect('/')->with('success', 'Your account has been deleted.');
    }

}