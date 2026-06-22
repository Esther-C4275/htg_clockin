<?php

namespace App\Http\Controllers;

//use App\Constants\DefaultPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login2');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:100',
            'password' => 'required|string',

        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // if(DefaultPassword::tryFrom($request->input('password'))){
                
            // }

            return redirect()->intended(route('index.staff'))->with('success', 'You are successfully logged in');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records'
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('user-login');
    }
}
