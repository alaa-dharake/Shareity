<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // public function create(){
    //     return view('feedback');
    // }
    public function store(Request $request)
    {
        // Validate incoming form data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Get the authenticated user
            $user = Auth::user();

            // Create a new Feedback instance
            $feedback = new Feedback;
            $feedback->firstName = $validatedData['firstName'];
            $feedback->lastName = $validatedData['lastName'];
            $feedback->email = $validatedData['email'];
            $feedback->subject = $validatedData['subject'];
            $feedback->message = $validatedData['message'];
            $feedback->user_id = $user->id; // Assign user_id

            // Save the feedback
            $feedback->save();

            // Redirect back with success message
            return redirect()->route('home')->with('success', 'Feedback submitted successfully!');
        } catch (\Exception $e) {
            // Handle any errors that occur during database interaction
            // Redirect back with error message
            return redirect()->back()->with('error', 'Failed to submit feedback. Please try again.');
        }
    }
}
