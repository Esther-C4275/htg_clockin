<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PasswordController extends Controller
{
    // 1. Show the user the form
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    // 2. Handle the form submission
    public function sendLink(Request $request)

    {

        $request->validate(['email' => 'required|email']);


        $status = Password::sendResetLink($request->only('email'));


        if ($status === Password::RESET_LINK_SENT) {
            return redirect()->route('password.check');
        }


        return back()->withErrors(['email' => __($status)]);
    }


    public function resetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);


        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $status = Password::reset($credentials, function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();
        });

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function email()
    {
        return view('auth.email-password');
    }
}
