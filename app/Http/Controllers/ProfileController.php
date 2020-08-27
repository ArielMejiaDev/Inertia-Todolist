<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Profile $profile
     * @return InertiaResponse
     */
    public function show(Profile $profile)
    {
        $profile = auth()->user()->profile;
        return Inertia::render('Profile/Show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Profile $profile
     * @return InertiaResponse
     */
    public function edit(Profile $profile)
    {
        return Inertia::render('Profile/Edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        if(auth()->user()->profile->profile_picture) {
            Storage::delete('public/' . auth()->user()->profile->profile_picture);
        }
        $picture = $request->file('profile_picture')->store('public/profile_pictures');
        $profile = auth()->user()->profile;
        $profile->update(['profile_picture' => 'profile_pictures/' . basename($picture)]);
        return Redirect::route('profile.show');
    }
}
