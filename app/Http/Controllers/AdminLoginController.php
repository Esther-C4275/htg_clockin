<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminLoginController extends Controller
{
    public function login()
    {
        return view('auth.admin-login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:100',
            'password' => 'required|string',

        ]);

        if (Auth::attempt($credentials)) {

            $user = User::query()->where('is_admin', true)->first();

            if (!$user->is_admin) {
                Auth::logout();

                return back()->withErrors([
                    'email' => 'You are not authorized as admin.',
                ]);
            }

            $request->session()->regenerate();

            return redirect()->intended(route('admin-employee.index'));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ])->onlyInput('email');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin-login');
    }
}
