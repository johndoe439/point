<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    public function update(Request $request)
    {
        $user = $request->user();

        $rules = [
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];

        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete($user->image);
            }
            $validated['image'] = $request->file('image')->store('profile', 'public');
        }

        $user->update($validated);

        return back()->with('status', 'profile-updated');
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

    public function kycStore(Request $request)
    {
        $user = $request->user();

        $rules = [
            'home_address'   => ['nullable', 'string', 'max:255'],
            'phone_number'   => ['nullable', 'string', 'max:20'],
            'country'        => ['nullable', 'string', 'max:100'],
            'document_type'  => ['nullable', 'in:drivers_license,government_id,passport'],
            'document_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,pdf', 'max:5120'],
        ];

        $data = $request->validate($rules);

        if ($request->hasFile('document_image')) {
            if ($user->document_image) {
                Storage::delete($user->document_image);
            }
            $data['document_image'] = $request->file('document_image')
                ->store('kyc/documents', 'public');
        }

        $user->update($data);

        return back()->with('status', 'kyc-updated');
    }
}
