<?php

namespace App\Http\Controllers;

use App\Models\HtgModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    private $officeLat = 6.2135273;   
    private $officeLng = 6.7022536;  
    private $maxDistanceMeters = 30; 

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
        if (!Auth::check()) {
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please log in or register your account first to clock in.'
                ], 401);
            }

            return redirect()->route('user-login')->with('error', 'Please log in or register your account first to clock in.');
        }

        $latitude  = $request->query('latitude');
        $longitude = $request->query('longitude');

        if (!$latitude || !$longitude) {
            return $this->buildResponse(
                $request, 
                false, 
                'GPS coordinates were not provided. Please use the Clock In button on your dashboard to scan.', 
                422
            );
        }

       
        $distance = $this->calculateDistance((float)$latitude, (float)$longitude, (float)$this->officeLat, (float)$this->officeLng);

        if ($distance > $this->maxDistanceMeters) {
            $msg = 'Geofence Error: You are ' . round($distance) . 'm away from the office. You must be within ' . $this->maxDistanceMeters . 'm.';
            return $this->buildResponse($request, false, $msg, 422);
        }

        $user      = Auth::user();
        $todayDate = now()->format('Y-m-d');

        $record = HtgModel::where('user_id', $user->id)
            ->where(function ($query) use ($todayDate) {
                $query->where('date', $todayDate)
                    ->orWhereDate('clock_in', now());
            })
            ->latest('id')
            ->first();

       
        if ($request->query('action') === 'clock-out') {
            if (!$record || !$record->clock_in) {
                return $this->buildResponse($request, false, 'You cannot clock out because you haven\'t clocked in today.', 400);
            }

            if ($record->clock_out) {
                return $this->buildResponse($request, false, 'You have already clocked out for today.', 400);
            }

            $record->update([
                'clock_out' => now(),
            ]);

            return $this->buildResponse($request, true, 'Clocked out successfully! Rest well.', 200);
        }

        // --- Handle Clock-In ---
        if ($record && $record->clock_in) {
            return $this->buildResponse($request, false, 'You have already recorded a clock-in timestamp for today.', 400);
        }

        HtgModel::create([
            'user_id'  => $user->id,
            'date'     => $todayDate,
            'clock_in' => now(),
        ]);

        return $this->buildResponse($request, true, 'Clock-in successfully synchronized! Have a wonderful day.', 200);
    }

  
    private function buildResponse(Request $request, bool $success, string $message, int $statusCode = 200)
    {
        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => $success,
                'message' => $message,
            ], $statusCode);
        }

        $flashKey = $success ? 'success' : 'error';
        return redirect()->route('index.staff')->with($flashKey, $message);
    }

    
    private function calculateDistance(float $lat1, float $lon1, float $lat2, float $lon2): float
    {
        $earthRadius = 6371000; 
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