<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RatingController extends Controller
{
    // Show the rating form for a specific chef
    public function showRatingForm(User $chef)
    {
        return view('rate-chef', ['chef' => $chef]);
    }

    // Handle the rating form submission
    public function submitRating(Request $request)
    {
        // Validate the request
        $request->validate([
            'user_id' => 'required|integer',
            'chef_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'description' => 'nullable|string',
        ]);
    
        try {
            // Log the received data
            Log::info('Rating form submitted:', $request->all());
    
            // Create a new rating
            $rating = Rating::create([
                'user_id' => $request->input('user_id'),
                'chef_id' => $request->input('chef_id'),
                'rating' => $request->input('rating'),
                'description' => $request->input('description'),
            ]);
    
            // Log success message
            Log::info('Rating saved successfully: ' . $rating->id);
    
            // Redirect back with success message
            return redirect()->back()->with('success', 'Rating submitted successfully.');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error saving rating: ' . $e->getMessage());
    
            // Redirect back with error message
            return redirect()->back()->with('error', 'Failed to submit rating. Please try again.');
        }
    }


    
}