<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\HtgModel;
use Carbon\Carbon;

class QrCodeController extends Controller
{
    
    private $officeLat = 6.2135273;   
    private $officeLng = 6.7022536;  
    private $maxDistanceMeters = 150; 

    public function downloadPrintableQr(Request $request)
    {
        $clockInUrl = route('qr.verify-scan');
        $fileName   = 'office-clockin-qr.png';
        $filePath   = public_path('images/' . $fileName);

        if (!file_exists(public_path('images'))) {
            mkdir(public_path('images'), 0755, true);
        }

        QrCode::format('png')
            ->size(500)
            ->margin(2)
            ->generate($clockInUrl, $filePath);

        return response()->download($filePath, $fileName);
    }

    public function verifyScannedCode(Request $request)
    {
        // 1. GPS Geofence Check (IP check removed)
        $latitude  = $request->query('latitude');
        $longitude = $request->query('longitude');

        if (!$latitude || !$longitude) {
            return response()->json([
                'success' => false,
                'message' => 'Geofence Error: GPS coordinates were not provided. Please ensure location services are enabled.'
            ], 422);
        }

        $distance = $this->calculateDistance($latitude, $longitude, $this->officeLat, $this->officeLng);

        if ($distance > $this->maxDistanceMeters) {
            return response()->json([
                'success' => false,
                'message' => 'Geofence Error: You are ' . round($distance) . 'm away from the office. You must be within ' . $this->maxDistanceMeters . 'm.'
            ], 422);
        }

      
        $user      = Auth::user();
        $todayDate = now()->format('Y-m-d');

        $record = HtgModel::where('user_id', $user->id)
            ->where(function ($query) use ($todayDate) {
                $query->where('date', $todayDate)
                    ->orWhereDate('clock_in', now());
            })
            ->first();

        
        if ($request->query('action') === 'clock-out') {
            if (!$record || !$record->clock_in) {
                return response()->json([
                    'success' => false,
                    'message' => 'You cannot clock out because you haven\'t clocked in today.'
                ], 400);
            }

            if ($record->clock_out) {
                return response()->json([
                    'success' => false,
                    'message' => 'You have already clocked out for today.'
                ], 400);
            }

            $record->update([
                'clock_out' => now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Clocked out successfully! Rest well.'
            ], 200);
        }

        // --- Handle Clock-In ---
        if ($record && $record->clock_in) {
            return response()->json([
                'success' => false,
                'message' => 'You have already recorded a clock-in timestamp for today.'
            ], 400);
        }

        HtgModel::create([
            'user_id'  => $user->id,
            'date'     => $todayDate,
            'clock_in' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Clock-in successfully synchronized! Have a wonderful day.'
        ], 200);
    }

    /**
     * Calculate ground distance between two lat/lng points in meters
     */
    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000; // Earth's radius in meters

        $latFrom = deg2rad($lat1);
        $lonFrom = deg2rad($lon1);
        $latTo   = deg2rad($lat2);
        $lonTo   = deg2rad($lon2);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

        return $angle * $earthRadius;
    }
}