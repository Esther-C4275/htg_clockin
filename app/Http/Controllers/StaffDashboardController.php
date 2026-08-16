<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\HtgModel;

class StaffDashboardController extends Controller
{
   
    private $officeLat = 6.213735;   // office Latitude
    private $officeLng = 6.702071;   // office Longitude
    private $maxDistanceMeters = 20; // 20-meter geofence threshold

    public function index()
    {
        $user = Auth::user();

        $today = HtgModel::where('user_id', $user->id)
            ->whereDate('clock_in', today())
            ->latest()
            ->first();

        $allRecords = HtgModel::where('user_id', $user->id)->get();

        $totalDays = $allRecords->count();
        $onTimeDays = 0;
        $lateDays = 0;

        foreach ($allRecords as $record) {
            if ($record->clock_in) {
                $clockTime = Carbon::parse($record->clock_in)->format('H:i:s');
                if ($clockTime <= '10:00:00') {
                    $onTimeDays++;
                } else {
                    $lateDays++;
                }
            }
        }

        $attendancePercentage = $totalDays > 0 ? round(($onTimeDays / $totalDays) * 100) : 0;

        $activities = HtgModel::where('user_id', $user->id)
            ->latest()
            ->take(2)
            ->get();

        return view('pages.staff-dashboard', compact(
            'user', 
            'activities', 
            'today', 
            'onTimeDays', 
            'attendancePercentage', 
            'lateDays'
        ));
    }

    public function clockIn(Request $request)
    {
        $user = Auth::user();
        $todayDate = now()->toDateString(); 

        // Validate incoming GPS coordinates from scanner request
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $distance = $this->calculateDistance(
            $request->latitude, 
            $request->longitude, 
            $this->officeLat, 
            $this->officeLng
        );

        if ($distance > $this->maxDistanceMeters) {
            return response()->json([
                'status' => false,
                'message' => 'Geofence Error: You are ' . round($distance) . 'm away from the office. You must be within ' . $this->maxDistanceMeters . 'm to Clock In.',
            ], 422);
        }

        $record = HtgModel::where('user_id', $user->id)
            ->where(function ($query) use ($todayDate) {
                $query->whereDate('date', $todayDate)
                      ->orWhereDate('clock_in', $todayDate);
            })
            ->latest('id')
            ->first();

        if ($record && $record->clock_in) {
            return response()->json([
                'status' => false,
                'message' => 'Already clocked in today',
            ]);
        }

        $record = HtgModel::create([
            'user_id'   => $user->id,
            'date'      => $todayDate,
            'clock_in'  => now(),
            'clock_out' => null,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Clocked in successfully',
            'clock_in_time' => Carbon::parse($record->clock_in)->format('H:i'),
        ]);
    }

    public function clockOut(Request $request)
    {
        $user = Auth::user();
        $todayDate = now()->toDateString(); 

        // Validate incoming GPS coordinates from scanner request
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $distance = $this->calculateDistance(
            $request->latitude, 
            $request->longitude, 
            $this->officeLat, 
            $this->officeLng
        );

        if ($distance > $this->maxDistanceMeters) {
            return response()->json([
                'status' => false,
                'message' => 'Geofence Error: You are ' . round($distance) . 'm away from the office. You must be within ' . $this->maxDistanceMeters . 'm to Clock Out.',
            ], 422);
        }

        $record = HtgModel::where('user_id', $user->id)
            ->where(function ($query) use ($todayDate) {
                $query->whereDate('date', $todayDate)
                      ->orWhereDate('clock_in', $todayDate);
            })
            ->latest('id')
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

    /**
     * Calculate distance between two points in meters using Haversine formula
     */
    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000; // Earth radius in meters

        $latFrom = deg2rad($lat1);
        $lonFrom = deg2rad($lon1);
        $latTo = deg2rad($lat2);
        $lonTo = deg2rad($lon2);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

        return $angle * $earthRadius;
    }
}