<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function download() {
        $user = Auth::user();
        $data = [
            [
                'name' => $user['name'],
                'nim' => $user['nim']
            ]
        ];
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
     
        return $pdf->download($user['nim']. '.pdf');
    }
}
