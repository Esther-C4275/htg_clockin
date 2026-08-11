<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminSetupPasswordController extends Controller
{
    public function showSetupForm(Request $request, $id)
    {
        
        $user = User::query()->where('id', $id)->where('is_admin', true)->firstOrFail();

        return view('auth.admin-setup-password', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    { 
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::query()->where('id', $id)->where('is_admin', true)->firstOrFail();
        
        $user->update([
            'password' => Hash::make($request->password), 
        ]);

        
        return redirect()->route('login')->with('success', 'Password set successfully! You can now log in as an admin.');
    }
}
