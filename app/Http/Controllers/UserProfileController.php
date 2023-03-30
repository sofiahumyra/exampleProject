<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserProfileController extends Controller
{
    public function view()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('edit_profile', compact('user'));
    }

    public function update(Request $request)
    {

        $user = Auth::user();
        if ($request->hasFile('profile_picture')) {
            $profile_picture = $request->file('profile_picture');
            $filename = time() . '.' . $profile_picture->getClientOriginalExtension();
            $profile_picture->storeAs('public/profile_pictures', $filename);
            $user->profile_picture = $filename;
            $user->name = $request->name;
            $user->email = $request->email;
            // set other fields
            $user->save();
            
        }
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }
}
