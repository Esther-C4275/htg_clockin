<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AdminSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();
        return view('pages.admin-setting', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        //dd($user);
        return view('pages.admin-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'phone' => 'required|string|max:20',
            'position' => 'nullable|string|max:100',
            'gender' => 'required|string|max:50',
            'date_of_birth' => 'required|date',
            'country' => 'required|string|max:150',
            'state' => 'required|string|max:100',
            'address' => 'required|string|max:255',
        ]);

        $user = User::where('is_admin', true)->first();

        $user->update($validatedData);

        return redirect()->route('admin-setting.index')->with('success', 'Profile edited sucessfully');
    }

    /*public function security()
    {
        $user = User::where('is_admin', true)->first();

        return view('pages.security-options', compact('user'));
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'current_password' => 'required|current_password', // Automatically validates against user's active password hash
            'password' => ['required', 'confirmed', Password::min(8)],
        ], [
            'current_password.current_password' => 'The current password you typed is incorrect.',
        ]);

        // Grab current admin user and update with the newly encrypted hash
        $user = User::where('is_admin', true)->first();
        $user->update([
            'password' => $request->password,
        ]);

        return redirect()->route('admin-setting.index')->with('success', 'Password updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
