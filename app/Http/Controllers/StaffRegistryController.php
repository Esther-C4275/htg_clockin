<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffRegistryController extends Controller
{
    public function index(Request $request)
{
    $user = Auth::user();

    $selectedMonthRaw = $request->input('month', Carbon::now()->format('Y-m'));
    $date = Carbon::parse($selectedMonthRaw . '-01');
    $year = $date->year;
    $month = $date->month;

    $attendanceRecords = HtgModel::query()->where('user_id', $user->id)
        ->whereYear('date', $year)
        ->whereMonth('date', $month)
        ->orderBy('date', 'asc')
        ->get();

    $totalWorkingDaysInMonth = 26;
    
    $daysPresent = 0;
    $daysAbsent = 0;
    $totalMinutesWorked = 0;

    foreach ($attendanceRecords as $record) {
        if ($record->clock_in) {
            $daysPresent++;

            
            if ($record->clock_out) {
                $in = Carbon::parse($record->clock_in);
                $out = Carbon::parse($record->clock_out);
                
                
                $totalMinutesWorked += $in->diffInMinutes($out, true);
            }
        } else {
            $daysAbsent++;
        }
    }

   
    if ($totalMinutesWorked < 0) {
        $totalMinutesWorked = 0;
    }

    $hours = floor($totalMinutesWorked / 60);
    $minutes = $totalMinutesWorked % 60;
    $totalHoursFormatted = "{$hours}h {$minutes}m";

    
    $attendanceRate = $totalWorkingDaysInMonth > 0 
        ? round(($daysPresent / $totalWorkingDaysInMonth) * 100) 
        : 0;

    return view('pages.staff-registry', compact(
        'user',
        'attendanceRecords',
        'daysPresent',
        'daysAbsent',
        'totalHoursFormatted',
        'attendanceRate', 
        'selectedMonthRaw',
        'totalWorkingDaysInMonth'
    ));
}
}
