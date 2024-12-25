<?php

namespace App\Http\Controllers;

use App\Models\User; // Make sure to import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Get the authenticated user
        $user = User::findOrFail(Auth::id());

        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id)
            ],
            'image' => 'nullable|image|max:2048', // Optional image upload
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:500'
        ]);

        // Update basic profile information
        $user->fill([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'image' => $request->input('image'),
            'bio' => $request->input('bio')
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('images', 'public');
            $user->image = $imagePath;
        }

        // Save the user
        $user->save();

        // Redirect back with success message
        return redirect()->route('profile.edit')
            ->with('status', 'Profile updated successfully');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'password' => 'required|current_password'
        ]);

        // Get the authenticated user
        $user = User::findOrFail(Auth::id());

        // Logout the user
        Auth::logout();

        // Delete the user account
        $user->delete();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to home page
        return redirect('/')->with('status', 'Your account has been deleted');
    }
}
