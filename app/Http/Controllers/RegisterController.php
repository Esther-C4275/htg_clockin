<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function store(Request $request): RedirectResponse
    {

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:150',
            'position' => 'nullable|string|max:100',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:100',
            'password' => 'required|string|min:8|confirmed',
            'gender' => 'nullable|string|max:20',
            'department' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:20'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        $validatedData['is_admin']   = false;
        //$validatedData['gender']     = null;
        //$validatedData['department'] = null;
        //$validatedData['country']    = null;

        $user = User::create($validatedData);
        // dd($validatedData);
        // $user = User::create(collect($validatedData)->only(['email', 'password', 'name'])->toArray());

        /*$user = User::create([
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'is_admin' => false,
            'date_of_birth' => $validatedData['date_of_birth'],
            'phone' => $validatedData['phone'],
            'company' => $validatedData['company'],
            'position' => $validatedData['position'],
            'address' => $validatedData['address'],
            'state' => $validatedData['state'],
            'gender' => null,
            'department' => null,
            'country' => null
        ]);*/





        // $user->htg()->create();

        return redirect()->route('user-login')->with('success', 'You have successfully registered');
    }
}

//it can also be $user = User::create($validatedData([

//'name' => 'required|string|max:100',
//'email' => 'required|string|email|max:100|unique:users',
//'password' => 'required|string|min:8|confirmed',
//]}
