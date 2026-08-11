<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SetupPasswordController extends Controller
{
    public function showSetupForm(Request $request, $id)
    {
       

        $user = User::query()->where('id', $id)->where('is_admin', false)->firstOrFail();

        return view('auth.setup-password', compact('user'));
    }


    public function updatePassword(Request $request, $id)
    {

        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::query()->where('id', $id)->where('is_admin', false)->firstOrFail();


        $user->update([
            'password' => $request->password,
        ]);


        return redirect()->route('user-login')->with('success', 'Password set successfully! You can now log in.');
    }
}
