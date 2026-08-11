<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\HtgModel;
use Carbon\Carbon;

class QrCodeController extends Controller
{

    public function downloadPrintableQr(Request $request)
    {

        $clockInUrl = route('qr.verify-scan');


        $fileName = 'office-clockin-qr.png';
        $filePath = public_path('images/' . $fileName);

if (!file_exists(public_path('images'))) {
    mkdir(public_path('images'), 0755, true);
}

QrCode::format('png')
    ->size(500)
    ->margin(2)
    ->generate($clockInUrl, $filePath);


$imageUrl = asset('images/' . $fileName);

return response()->download($filePath, $fileName);
    }


    public function verifyScannedCode(Request $request)
    {

        $officeIpAddress = '192.168.0.139';
        $clientIp = $request->ip();

        $allowedIps = [$officeIpAddress, '127.0.0.1', '::1'];

        if (!in_array($clientIp, $allowedIps)) {
            return response()->json([
                'success' => false,
                'message' => 'Clock-in rejected. You must be connected to the Office Wi-Fi network.'
            ], 403);
        }

        $user = Auth::user();
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
}
