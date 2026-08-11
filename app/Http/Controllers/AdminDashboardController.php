<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminUser = Auth::user();
        //$users = User::query()-> where('is_admin', false)->latest()->get();

        $totalEmployees = User::query()->where('is_admin', false)->count();
        $hizoStaff = User::query()->where('company', 'Hizo')
            ->where('is_admin', false)
            ->count();

        $glydeStaff = User::query()->where('company', 'Glyde')
            ->where('is_admin', false)
            ->count();

        $trazoStaff = User::query()->where('company', 'Trazo')
            ->where('is_admin', false)
            ->count();

        $employees = User::query()->where('is_admin', false)
            ->latest()
            ->get();

        $todaysRecords = HtgModel::query()->where('date', today()->format('Y-m-d'))->get();

        $presentCount = $todaysRecords->count();
        $absentCount = max(0, $totalEmployees - $presentCount);

        $onTimeCount = 0;
        $lateCount = 0;

        $startOfWeek = \Carbon\Carbon::now()->startOfWeek(); 

        $presentData = [0, 0, 0, 0, 0]; 
        $absentData  = [0, 0, 0, 0, 0];

        for ($i = 0; $i < 5; $i++) {
            $loopDate = $startOfWeek->copy()->addDays($i)->format('Y-m-d');
            
            
            $dayRecords = HtgModel::query()->where('date', $loopDate)->get();
            
            
            $dayPresentCount = $dayRecords->whereNotNull('clock_in')->count();
            
        
            $presentData[$i] = $dayPresentCount;
            $absentData[$i]  = max(0, $totalEmployees - $dayPresentCount);
        }

        foreach ($todaysRecords as $record) {
            if ($record->clock_in) {
                $clockTime = \Carbon\Carbon::parse($record->clock_in)->format('H:i:s');
                
              
                if ($record->clock_out && \Carbon\Carbon::parse($record->clock_out)->format('H:i:s') < '18:00:00') {
                    $lateCount++;
                } elseif ($clockTime <= '10:00:00') {
                    $onTimeCount++;
                } else {
                    $lateCount++;
                }
            }
        }

        foreach ($employees as $emp) {
            $attendanceToday = $todaysRecords->where('user_id', $emp->id)->first();
    
            if ($attendanceToday) {
              
                $clockTime = \Carbon\Carbon::parse($attendanceToday->clock_in)->format('H:i:s');
                $emp->today_status = ($clockTime <= '10:00:00') ? 'On Time' : 'Late';
                $emp->today_clock_in = \Carbon\Carbon::parse($attendanceToday->clock_in)->format('g:i A');
                
               
                $emp->out_status = 'Normal'; 
                
                if ($attendanceToday->clock_out) {
                    $emp->today_clock_out = \Carbon\Carbon::parse($attendanceToday->clock_out)->format('g:i A');
                    
                   
                    $logoutTime = \Carbon\Carbon::parse($attendanceToday->clock_out)->format('H:i:s');
                    if ($logoutTime < '18:00:00') {
                        $emp->out_status = 'Early Out'; 
                    }
                } else {
                    $emp->today_clock_out = 'Active';
                }
            } else {
                $emp->today_status = 'Absent';
                $emp->out_status = 'Absent';
                $emp->today_clock_in = '—';
                $emp->today_clock_out = '—';
            }
        
        
        }

        return view('pages.admin-dashboard', compact(
            'totalEmployees',
            'hizoStaff',
            'glydeStaff',
            'trazoStaff',
            'employees',
            //'users',
            'adminUser',
            'presentCount',
            'absentCount',
            'onTimeCount',
            'lateCount',
            'presentData', 
            'absentData'
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
