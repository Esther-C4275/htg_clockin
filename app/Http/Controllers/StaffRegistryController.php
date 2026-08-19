<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
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

    
    $startOfMonth = $date->copy()->startOfMonth();
    $endOfMonth = $date->copy()->endOfMonth();
    
    
    $isCurrentMonth = $date->isCurrentMonth();
    $endDate = $isCurrentMonth ? Carbon::now()->endOfDay() : $endOfMonth;

    
    $expectedWorkingDays = 0;
    $period = CarbonPeriod::create($startOfMonth, $endDate);

    foreach ($period as $day) {
        if (!$day->isWeekend()) { 
            $expectedWorkingDays++;
        }
    }

    $daysPresent = 0;
    $totalMinutesWorked = 0;

    foreach ($attendanceRecords as $record) {
        if ($record->clock_in) {
            $daysPresent++;
    
            if ($record->clock_out) {
                $in = Carbon::parse($record->clock_in);
                $out = Carbon::parse($record->clock_out);
                
                $totalMinutesWorked += $in->diffInMinutes($out, true);
            }
        }
    }

   
    $daysAbsent = max(0, $expectedWorkingDays - $daysPresent);

    if ($totalMinutesWorked < 0) {
        $totalMinutesWorked = 0;
    }

    $hours = floor($totalMinutesWorked / 60);
    $minutes = $totalMinutesWorked % 60;
    $totalHoursFormatted = "{$hours}h {$minutes}m";

    $attendanceRate = $expectedWorkingDays > 0 
        ? round(($daysPresent / $expectedWorkingDays) * 100) 
        : 0;

        $availableMonths = collect();
        for ($i = 0; $i < 12; $i++) {
            $m = Carbon::now()->subMonths($i)->startOfMonth();
            $availableMonths->push([
                'value' => $m->format('Y-m'),   
                'label' => $m->format('F Y'),   
            ]);
        }

    return view('pages.staff-registry', compact(
        'user',
        'attendanceRecords',
        'daysPresent',
        'daysAbsent',
        'totalHoursFormatted',
        'attendanceRate', 
        'selectedMonthRaw',
        'expectedWorkingDays',
        'availableMonths'
    ));
}
}
