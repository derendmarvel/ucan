<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\NimEmailImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public static function guestlist(){
        $guests = User::where('role', 'guest')->paginate(3);
        $vips = User::where('role', 'VIP')->paginate(3);
    
        return view('guestlist', [
            'guests' => $guests,
            'VIPs' => $vips,
        ]);
    }

    public static function guestSearch(Request $request){
        if($request->has('search')){
            $guests = User::where('role', 'guest')
                            ->where(function ($query) use ($request) {
                                $query->where('name', 'like', '%' . $request->search . '%')
                                    ->orWhere('email', 'like', '%' . $request->search . '%');
                            })
                            ->paginate(3)->withQueryString();
        } else {
            $guests = User::where('role', 'guest')->paginate(3);
        }

        $vips = User::where('role', 'VIP')->paginate(3);
    
        return view('guestlist', [
            'guests' => $guests,
            'VIPs' => $vips,
        ]);
    }

    public static function vipSearch(Request $request){
        if($request->has('search')){
            $vips = User::where('role', 'VIP')
                            ->where(function ($query) use ($request) {
                                $query->where('name', 'like', '%' . $request->search . '%')
                                    ->orWhere('email', 'like', '%' . $request->search . '%');
                            })
                            ->paginate(3)->withQueryString();
        } else {
            $vips = User::where('role', 'VIP')->paginate(3);
        }
        
        $guests = User::where('role', 'guest')->paginate(3);
    
        return view('guestlist', [
            'guests' => $guests,
            'VIPs' => $vips,
        ]);
    }

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
            if ($existingEmail && $existingNIM){
                if ($validatedData['email'] == 'bma@ciputra.ac.id' && $validatedData['nim'] == 'BMACiputra2024'){
                    $user = User::where('email', $validatedData['email'])->first();
                    Auth::login($user);
                    return redirect()->route('guestlist'); 
                } else if (str_ends_with($validatedData['email'], '@ciputra.ac.id')) {
                    $user = User::where('email', $validatedData['email'])->first();
                    if ($user->nim == $validatedData['nim']){
                        Auth::login($user);
                        return redirect()->route('infovip');
                    } 
                    return redirect()->back()->withErrors(['nim' => 'Incorrect NIM']);
                    
                } else {
                    foreach ($data as $row) {
                        if ($row['nis'] == $validatedData['nim'] && $row['official_email'] == $validatedData['email']){
                            $user = User::where('email', $validatedData['email'])->first();
                            Auth::login($user);
                            return redirect()->route('info');
                        }
                    }
                }
                return redirect()->back()->withErrors(['email' => 'Incorrect NIM or email.']);
            } else {
                if (str_ends_with($validatedData['email'], '@student.ciputra.ac.id')){
                    foreach ($data as $row) {
                        if ($row['nis'] == $validatedData['nim'] && $row['official_email'] == $validatedData['email']) {
                            $user = User::create([
                                'name' =>$validatedData['name'],
                                'email' => $validatedData['email'],
                                'nim' => $validatedData['nim'],
                                'role' => 'guest',
                                'presence' => 0,
                                'remember_token' => Str::random(10),
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
                        'presence' => 0,
                        'remember_token' => Str::random(10),
                    ]);
                                
                    Auth::login($user);
                    return redirect()->route('infovip');
                }
            }
        }
    }
}
