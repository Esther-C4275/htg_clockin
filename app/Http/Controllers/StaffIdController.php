<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffIdController extends Controller
{
    public function front()
    {
        $employeeUuid = request()->query('employee_id');

        if ($employeeUuid) {
            $user = User::query()
                ->where('is_admin', false)
                ->where('uuid', $employeeUuid)
                ->firstOrFail();
        } else {
            $user = Auth::user();
        }

        return view('pages.staff-frontId', compact('user'));
    }

    public function show(User $user)
    {
       
        return view('pages.staff-frontId', compact('user'));
    }

}
