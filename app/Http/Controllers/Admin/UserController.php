<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function changeProfile()
    {
        $user = Auth::user();

        return view('admin.users.change-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'fullName' => 'required', 'string', 'max:255',
        ]);

        $user = Auth::user();

        $user->fullName = $request->fullName;
        $user->facebookContact = $request->facebookContact;
        $user->instagramContact = $request->instagramContact;
        $user->youtubeContact = $request->youtubeContact;
        $user->pinterestContact = $request->pinterestContact;
        $user->phoneNumber = $request->phoneNumber;
        $user->aboutMe  = $request->aboutMe;

        $user->save();

        return redirect()->back()->with("message", "Update profile success!");
    }

    public function changePassword()
    {
        $user = Auth::user();

        return view('admin.users.change-password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $this->validate(
            $request,
            [
                'old_password' => 'required',
                'password' => ['string', 'min:8', 'confirmed'],
            ]
        );

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old password is incorrect!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with("message", "Update password success!");
    }
}