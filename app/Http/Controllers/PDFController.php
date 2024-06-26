<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function download() {
        ini_set('max_execution_time', 300);
        ini_set("memory_limit","512M");
        $user = Auth::user();
        
        if(!$user['invitation_code']){
            $user['invitation_code'] = 'UCAN Invitation-'.$user->id.'-'.$user->nim;
        }

        $pdf = Pdf::loadView('pdf', ['user' => $user]);
     
        return $pdf->download($user['invitation_code']. '.pdf');
    }

    public function view() {
        $user = Auth::user();

        return view('pdf', [
            'user' => $user
        ]);
    }

    public function allguests() {
        ini_set('max_execution_time', 300);
        ini_set("memory_limit","512M");
        $guests = User::where('role', 'guest')->get();
        $VIPs = User::where('role', 'VIP')->get();

        $pdf = Pdf::loadView('allguests', ['guests' => $guests, 'VIPs' => $VIPs]);
     
        return $pdf->download('All Guests.pdf');
    }
}
