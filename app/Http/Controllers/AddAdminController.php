<?php

namespace App\Http\Controllers;

use App\Constants\DefaultPassword;
use App\Models\User;
use App\Notifications\AdminWelcomeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AddAdminController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        return view('pages.add-admin', compact('user'));
    }

    public function store(Request $request)
    {

        $password = DefaultPassword::Password2->value;

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50',
            'phone' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'gender' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'country' => 'required|string|max:50',
            'state' => 'required|string|max:50',
            'address' => 'required|string|max:100',
        ]);

        $admin = User::create([
            ...$validatedData,
            'uuid'       => (string) \Illuminate\Support\Str::uuid(),
            'is_admin'   => true,
            'password' => Hash::make($password),
            // 'first_name' => $validatedData['first_name'],
            // 'last_name'  => $validatedData['last_name'],
            // 'email'      => $validatedData['email'],
            // 'phone'      => $validatedData['phone'],
            // 'position'   => $validatedData['position'],
            // 'gender'     => $validatedData['gender'],
            // 'phone'      => $validatedData['d_o_b'],
            // 'phone'      => $validatedData['phone'],
            // 'phone'      => $validatedData['phone'],
            // 'phone'      => $validatedData['phone'],
            

        ]);
        $admin->notify(new AdminWelcomeNotification($admin, $password));

        return redirect()->route('admin-employee.index')->with('success', 'New admin added successfully!');
    }
}
