<?php

namespace App\Http\Controllers\user;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile');
    }
    public function index_dish(){
        $dishes = Dish::all();
        return view('user.index-dishes', ['dishes' => $dishes]);
    }
    
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gender' => 'nullable|string|in:male,female,other',
            'region' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        if ($request->hasFile('avatar')) {
            // Delete the old avatar if it exists
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
            // Store the new avatar
            $avatarPath = $request->file('avatar')->store('avatars');
            $user->avatar = $avatarPath;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'region' => $request->region,
            'phone' => $request->phone,
            'avatar' => isset($avatarPath) ? $avatarPath : $user->avatar,
        ]);

        return redirect()->route('user.profile-edit')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Request $request)
    {
        $user = Auth::user();

        // Delete the avatar file if it exists
        if ($user->avatar) {
            Storage::delete($user->avatar);
        }

        // Log out the user
        Auth::logout();

        // Delete the user
        $user->delete();

        // Redirect to the homepage or login page
        return redirect('/')->with('success', 'Profile deleted successfully.');
    }

    public function showChangePasswordForm()
    {
        return view('user.security');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('/profile')->with('success', 'Password changed successfully.');
    }
}