<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

       
        $today = HtgModel::query()
            ->where('user_id', $user->id)
            ->where('date', today()->format('Y-m-d'))
            ->first();

        $allRecords = HtgModel::where('user_id', $user->id)->get();

        $totalDays = $allRecords->count();
        $onTimeDays = 0;
        $lateDays = 0;

        foreach ($allRecords as $record) {
            if ($record->clock_in) {
                $clockTime = \Carbon\Carbon::parse($record->clock_in)->format('H:i:s');
                if ($clockTime <= '10:00:00') {
                    $onTimeDays++;
                } else {
                    $lateDays++;
                }
            }
        }

       
        $attendancePercentage = $totalDays > 0 ? round(($onTimeDays / $totalDays) * 100) : 100;

        $activities = HtgModel::where('user_id', $user->id)
            ->latest()
            ->take(5)
            ->get();

        return view('pages.staff-dashboard', compact('user', 'activities', 'today','onTimeDays','attendancePercentage','lateDays'));
    }

    public function clockIn(Request $request)
    {
        $user = Auth::user();

       
        $record = HtgModel::firstOrCreate([
            'user_id' => $user->id,
            'date' => today(),
        ], [
            'clock_in' => now(),      
            'clock_out' => null,
        ]);

        //prevents double clockin
        if ($record->clock_in) {
            return response()->json([
                'status' => false,
                'message' => 'Already clocked in today',
            ]);
        }

        $record->update([
            'clock_in' => now(),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Clocked in successfully',
            'clock_in_time' => $record->clock_in->format('H:i'),
        ]);
    }

    public function clockOut(Request $request)
    {
        $user = Auth::user();

        $record = HtgModel::where('user_id', $user->id)
            ->where('date', today())
            ->first();

        if (!$record) {
            return response()->json([
                'status' => false,
                'message' => 'No record found for today',
            ]);
        }

        if (!$record->clock_in) {
            return response()->json([
                'status' => false,
                'message' => 'You must clock in first',
            ]);
        }

        if ($record->clock_out) {
            return response()->json([
                'status' => false,
                'message' => 'Already clocked out today',
            ]);
        }

        $record->update([
            'clock_out' => now(),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Clocked out successfully',
        ]);
    }
}
