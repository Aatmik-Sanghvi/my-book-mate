<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// use App\Http\Controllers\Validator;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = Auth::user();
        return view('profile', [
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    // Get the authenticated user
    $user = Auth::user();

    // Validate and handle profile photo upload
    $validator = Validator::make($request->all(), [
        'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($validator->fails()) {
        return Redirect::route('profile.edit')
            ->withErrors($validator)
            ->withInput();
    }

    if ($request->hasFile('profile_photo')) {
        // Delete old profile photo if it exists
        if ($user->profile_photo && Storage::exists('public/profile_photos/' . $user->profile_photo)) {
            Storage::delete('public/profile_photos/' . $user->profile_photo);
        }

        // Store the new profile photo
        $fileName = time() . '.' . $request->profile_photo->extension();
        $request->profile_photo->storeAs('public/profile_photos', $fileName);

        // Update the user's profile photo
        $user->profile_photo = $fileName;
    }

    // Update other profile details
    $user->fill($request->validated());

    // If email is changed, reset verification
    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    $user->save();

    return Redirect::route('profile.edit')->with(['success' => 'User Profile updated successfully.']);
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function change_profile_pic(Request $request){
        dd($request);
    }
}
