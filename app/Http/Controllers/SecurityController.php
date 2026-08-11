<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('pages.security-options', compact('user'));
    }

    public function updatePassword(Request $request)
{
    $user = Auth::user();
    
    $request->validate([
        'current_password' => ['required', 'string'],
       
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ], [
        'password.confirmed' => 'The new password confirmation does not match.',
    ]);

   
    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()
            ->withErrors(['current_password' => 'Your current password matches nothing on our records.'])
            ->withInput();
    }

    
    $user->update([
        'password' => $request->password
    ]);

    return redirect()->route('admin-setting.index')->with('success', 'Password updated successfully!');
  }
}
