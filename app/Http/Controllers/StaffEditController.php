<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StaffEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
       return view('pages.staff-info', compact('user'));
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
    public function edit(string $id)
    {
        $user = Auth::user();
        return view('pages.staff-edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
       $validatedData = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users,email,' . Auth::id(),
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:20',
            'position' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'country' => 'required|string|max:150',
            'state' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            
       ]);
       $user = Auth::user();

       
       $user->update($validatedData);

       return redirect()->route('staff-edit.index')->with('success', 'Profile edited sucessfully');

       
    }

    public function updateAvatar(Request $request){
        $request->validate([
            
          'avatar'=> 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        $user = Auth::user();

        if ($request->hasFile('avatar')) {
        
            if ($user->avatar) {
                Storage::delete('public/' . $user->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');

            $user->avatar = $avatarPath;
            $user->save();
            }

            return back()->with('success', 'Avatar updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
