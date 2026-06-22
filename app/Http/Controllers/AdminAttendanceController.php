<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    // 1. Gather global baseline metrics
    $totalEmployees = User::query()->where('is_admin', false)->count();
    $employees = User::query()->where('is_admin', false)->latest()->get();

   
    $filter = $request->input('filter_range', 'today');

   
    $recordsQuery = HtgModel::query();

    if ($filter === 'today') {
        $recordsQuery->where('date', Carbon::today()->format('Y-m-d'));
    } elseif ($filter === 'yesterday') {
        $recordsQuery->where('date', Carbon::yesterday()->format('Y-m-d'));
    } elseif ($filter === 'this_week') {
        $recordsQuery->whereBetween('date', [
            Carbon::now()->startOfWeek()->format('Y-m-d'), 
            Carbon::now()->endOfWeek()->format('Y-m-d')
        ]);
    }
   
    $filteredRecords = $recordsQuery->get();
    
    
    $presentCount = $filteredRecords->whereNotNull('clock_in')->unique('user_id')->count();
    $absentCount  = max(0, $totalEmployees - $presentCount);
    
    $onTimeCount = 0;
    $lateCount = 0;

    foreach ($filteredRecords as $record) {
        if ($record->clock_in) {
            $clockTime = Carbon::parse($record->clock_in)->format('H:i:s');
          
            if ($record->clock_out && Carbon::parse($record->clock_out)->format('H:i:s') < '18:00:00') {
                $lateCount++;
            } elseif ($clockTime > '10:00:00') {
                $lateCount++;
            } else {
                $onTimeCount++;
            }
        }
    }

    
    foreach ($employees as $employee) {
        
        $attendance = $filteredRecords->where('user_id', $employee->id)->first();
        
        if ($attendance) {
            $clockInStr = Carbon::parse($attendance->clock_in)->format('g:i A');
            
            if ($attendance->clock_out) {
                $clockOutStr = Carbon::parse($attendance->clock_out)->format('g:i A');
                $employee->time_string = $clockInStr . " - " . $clockOutStr;
                $employee->row_status = 'Active'; 
                
                $start = Carbon::parse($attendance->clock_in);
                $end = Carbon::parse($attendance->clock_out);
                $hours = $start->diffInHours($end);
                $minutes = $start->diffInMinutes($end) % 60;
                $employee->total_hours = $hours . "h " . $minutes . "m";
            } else {
                
                $employee->time_string = $filter === 'today' ? $clockInStr . " - Present" : $clockInStr . " - Done";
                $employee->row_status = 'Active';
                $employee->total_hours = $filter === 'today' ? "Counting..." : "—";
            }
        } else {
            $employee->time_string = "—";
            $employee->total_hours = "—";
            $employee->row_status = 'Absent';
        }
    }

    // 🎯 6. Pass 'filter' and 'onTimeCount' down to the view layer layout
    return view('pages.admin-attendance', compact(
        'totalEmployees',
        'employees',
        'presentCount',
        'absentCount',
        'lateCount',
        'onTimeCount',
        'filter'
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
