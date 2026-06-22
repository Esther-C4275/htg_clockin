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
        $employeeId = request()->query('employee_id');

        if ($employeeId) {
            $user = User::query()->where('is_admin', false)->findOrFail('employee_id');
        } else {
            $user = Auth::user();
        }
        return view('pages.staff-frontId', compact('user'));
    }

    public function back()
    {
        $employeeId = request()->query('employee_id');

        if ($employeeId) {
            $user = User::query()->where('is_admin', false)->findOrFail('employee_id');
        } else {
            $user = Auth::user();
        }
        return view('pages.staff-backId', compact('user'));
    }
}
