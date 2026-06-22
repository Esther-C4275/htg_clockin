<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ViewDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       
        $adminUser = User::query()->where('is_admin', true)->latest()->get()->get(0);

       
        $employeeId = request()->query('employee_id');
        
        if ($employeeId) {
            $user = User::query()->where('is_admin', false)->findOrFail($employeeId);
        } else {
            $user = User::query()->where('is_admin', false)->latest()->get()->get(0);
        }

       
        $attendanceRecords = HtgModel::query()->where('user_id', $user->id)->orderBy('date', 'desc')->get();

        
        $presentDaysCount = $attendanceRecords->count();
        $absentDaysCount = 0; 
        
       
        $totalMinutes = 0;
        $validClocksCount = 0;

        foreach ($attendanceRecords as $record) {
            if ($record->clock_in) {
                $clockTime = Carbon::parse($record->clock_in);
                
                $totalMinutes += ($clockTime->hour * 60) + $clockTime->minute;
                $validClocksCount++;
            }
        }

        if ($validClocksCount > 0) {
            $avgAbsoluteMinutes = round($totalMinutes / $validClocksCount);
            $avgHoursStr = str_pad(floor($avgAbsoluteMinutes / 60), 2, '0', STR_PAD_LEFT);
            $avgMinutesStr = str_pad(($avgAbsoluteMinutes % 60), 2, '0', STR_PAD_LEFT);
            $averageOnTime = "{$avgHoursStr}:{$avgMinutesStr}:00";
        } else {
            $averageOnTime = "—";
        }

        
        $currentMonthName = today()->format('F');

        return view('pages.view-details', compact(
            'adminUser',
            'user',
            'attendanceRecords',
            'presentDaysCount',
            'absentDaysCount',
            'averageOnTime',
            'currentMonthName'
        ));
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
    public function store(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'clock_in_at' => 'required|string'
        ]);

        $user->htg()->create([
            'clock_in_at' => now()->toTimeString(),
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $clockInRecord = $user->htg()->whereToday()->latest();

        $clockInRecord->update([
            'clock_out_at' => now()->toTimeString(),
        ]);

        return redirect()->intended(route(''))->with('success', 'You are now logged in');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
