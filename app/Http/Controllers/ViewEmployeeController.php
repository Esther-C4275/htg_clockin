<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewEmployeeController extends Controller
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

       
        $todayRecord = HtgModel::query()->where('user_id', $user->id)->where('date', today()->format('Y-m-d'))->get()->get(0);

        $hoursLogged = 0.0;
        $progressPercent = 0;

        if ($todayRecord && $todayRecord->clock_in && $todayRecord->clock_out) {
            $start = Carbon::parse($todayRecord->clock_in);
            $end = Carbon::parse($todayRecord->clock_out);
            
           
            $hoursLogged = round($start->diffInMinutes($end) / 60, 2);
            $progressPercent = min(100, round(($hoursLogged / 8.0) * 100));
        }

       
        $allTimeRecords = HtgModel::query()->where('user_id', $user->id)->get();
        
        $onTimeDays = 0;
        $lateOrMissedDays = 0;

        foreach ($allTimeRecords as $record) {
            if ($record->clock_in) {
                $clockTime = Carbon::parse($record->clock_in)->format('H:i:s');
                if ($clockTime <= '10:00:00') {
                    $onTimeDays++;
                } else {
                    $lateOrMissedDays++;
                }
            }
        }

        $totalDaysWorked = $onTimeDays + $lateOrMissedDays;
        $attendancePercentage = $totalDaysWorked > 0 ? round(($onTimeDays / $totalDaysWorked) * 100) : 0;
        
       
        $strokeDashOffset = 251.2 - (251.2 * $attendancePercentage) / 100;

        
        return view('pages.view-employee', compact(
            'adminUser', 
            'user', 
            'hoursLogged', 
            'progressPercent',
            'onTimeDays',
            'lateOrMissedDays',
            'attendancePercentage',
            'strokeDashOffset'
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
   
     public function show()
     {
         
            
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
