<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {}

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
        // $validatedData = $request->validate([
        //     'clock_in_at' => 'required|string'
        // ]);

        // $user->htg()->create([
        //     'clock_in_at' => now()->toTimeString(),
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $adminUser = Auth::user();

        $user = User::query() ->where('is_admin', false)->where('uuid', $id)->firstOrFail();

        // $employeeId = $request->query('employee_id');
        // if ($employeeId) {
        //     $user = User::query()->where('is_admin', false)->findOrFail($employeeId);
        // } else {
        //     $user = User::query()->where('is_admin', false)->latest()->first();
        // }


        $selectedMonth = (int) request()->query('month', Carbon::today()->month);
    $selectedYear = (int) request()->query('year', Carbon::today()->year);

        $attendanceRecords = HtgModel::query()
            ->where('user_id', $user->id)
            ->whereYear('clock_in', $selectedYear)
            ->whereMonth('clock_in', $selectedMonth)
            ->orderBy('clock_in', 'desc')
            ->paginate(10)
            ->appends(request()->query());


            $presentDaysCount = $attendanceRecords
            ->whereNotNull('clock_in')
            ->pluck('clock_in')
            ->map(fn($clockIn) => Carbon::parse($clockIn)->format('Y-m-d'))
            ->unique()
            ->count();

       $totalWorkingDaysInMonth = 26;
    $absentDaysCount = max(0, $totalWorkingDaysInMonth - $presentDaysCount);

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
        $avgHours = floor($avgAbsoluteMinutes / 60);
        $avgMinutesStr = str_pad(($avgAbsoluteMinutes % 60), 2, '0', STR_PAD_LEFT);
        
        $period = $avgHours >= 12 ? 'PM' : 'AM';
        $displayHour = $avgHours % 12 ?: 12; 
        $avgHoursStr = str_pad($displayHour, 2, '0', STR_PAD_LEFT);

        $averageOnTime = "{$avgHoursStr}:{$avgMinutesStr} {$period}";
    } else {
        $averageOnTime = "—";
    }

        $currentMonthName = Carbon::create()->month((int)$selectedMonth)->format('F');

        return view('pages.view-details', compact(
            'adminUser',
            'user',
            'attendanceRecords',
            'presentDaysCount',
            'absentDaysCount',
            'averageOnTime',
            'currentMonthName',
            'selectedMonth',
            'selectedYear'
        ));
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
    public function update(Request $request, User $user)
    {
        // $clockInRecord = $user->htg()->whereToday()->latest();

        // $clockInRecord->update([
        //     'clock_out_at' => now()->toTimeString(),
        // ]);

        // return redirect()->intended(route(''))->with('success', 'You are now logged in');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
