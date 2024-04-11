<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\NimEmailImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'nim' => 'required',
        ]);

        $import = new NimEmailImport();
        $filePath = public_path('images/Data Mahasiswa PEMILU 2024.xlsx');
        $data = Excel::toArray($import, $filePath)[0];

        if (!str_ends_with($validatedData['email'], '@student.ciputra.ac.id') && !str_ends_with($validatedData['email'], '@ciputra.ac.id')) {
            return redirect()->back()->withErrors(['email' => 'Invalid email format. Please use your Universitas Ciputra email.']);
        } else {
            $existingEmail = User::where('email', $validatedData['email'])->first();
            $existingNIM = User::where('nim', $validatedData['nim'])->first();
            if ($existingEmail){
                if ($existingNIM){
                    foreach ($data as $row) {
                        if ($row['nis'] == $validatedData['nim'] && $row['official_email'] == $validatedData['email']){
                            $user = User::where('email', $validatedData['email'])->first();
                            Auth::login($user);
                            return redirect()->route('info');
                        }
                    }
                    return redirect()->back()->withErrors(['email' => 'Incorrect NIM or email.']);
                }
            } else {
                if (str_ends_with($validatedData['email'], '@student.ciputra.ac.id')){
                    foreach ($data as $row) {
                        if ($row['nis'] == $validatedData['nim'] && $row['official_email'] == $validatedData['email']) {
                            $user = User::create([
                                'name' =>$validatedData['name'],
                                'email' => $validatedData['email'],
                                'nim' => $validatedData['nim'],
                                'role' => 'guest',
                            ]);
                                        
                            Auth::login($user);
                            return redirect()->route('info');
                        }
                    }
                    return redirect()->back()->withErrors(['email' => 'Incorrect NIM or email.']);
                } else if (str_ends_with($validatedData['email'], '@ciputra.ac.id')){
                    $user = User::create([
                        'name' => $validatedData['name'],
                        'email' => $validatedData['email'],
                        'nim' => $validatedData['nim'],
                        'role' => 'VIP',
                    ]);
                                
                    Auth::login($user);
                    return redirect()->route('info');
                }
            }
        }


    }
}
