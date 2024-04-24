<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function download() {
        $user = Auth::user();
        
        if(!$user['invitation_code']){
            $user['invitation_code'] = 'UCAN-'.$user->id.'-INV-'.$user->nim;
        }

        $pdf = Pdf::loadView('pdf', ['user' => $user]);
     
        return $pdf->download($user['invitation_code']. '.pdf');
    }
}
