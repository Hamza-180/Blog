<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Ensure this method can only be accessed by admins
    public function promoteUser($id)
    {
        // Check if the authenticated user is an admin
        if (Auth::user()->usertype != 'admin') {
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        // Find the user by ID
        $user = User::find($id);

        if ($user) {
            // Promote the user to admin
            $user->usertype = 'admin';
            $user->save();

            return redirect()->back()->with('success', 'User promoted to administrator successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
}
