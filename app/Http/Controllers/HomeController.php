<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Applying auth middleware to ensure only authenticated users can access these methods
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index()
    {
        $user = Auth::user();
    
        // Fetch the top 3 campaigns by donated amount
        $campaigns = Campaign::orderBy('donated_amount', 'asc')->take(3)->get();
    
        // Retrieve top 4 rated chefs
        $topChefs = User::where('role', 'chef') // Filter chefs only
                        ->whereHas('ratings') // Ensure chefs have at least one rating
                        ->with('ratings')
                        ->select('users.*', DB::raw('(SELECT AVG(rating) FROM ratings WHERE ratings.chef_id = users.id) as avg_rating'))
                        ->orderByDesc('avg_rating') // Order by average rating
                        ->take(4) // Limit to top 4 chefs
                        ->get();
    
        // Redirecting based on user role
        if ($user->isAdmin()) {
            return $this->adminHome();
        } else {
            return view('home', compact('user', 'campaigns', 'topChefs')); // Ensure this view exists in your resources/views directory
        }
    }
    

    /**
     * Show the application dashboard for admin users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $user = Auth::user();
        return view('home', compact('user')); // Ensure this view exists in your resources/views directory
    }
}
