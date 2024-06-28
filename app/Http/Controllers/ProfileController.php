<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function updateImageModal(Request $request)
    {
        if ($request->hasFile('profile_image')) {

            $user = Auth::user();
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
            $user->save();
            return redirect()->back()->with('success', 'Profile image path updated successfully');
        }

        return redirect()->back()->with('error', 'Failed to update profile image path');
    }

    public function removeImageModal()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->profile_image = null;

            $user->save();
            return redirect()->back()->with('success', 'Profile image path removed successfully');
        }

        return redirect()->back()->with('error', 'Failed to remove profile image path');
    }
}
