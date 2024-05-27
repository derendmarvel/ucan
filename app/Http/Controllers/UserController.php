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
        $guests = User::where('role', 'guest')->paginate(10);
        $vips = User::where('role', 'VIP')->paginate(10);
    
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
                            ->paginate(10)->withQueryString();
        } else {
            $guests = User::where('role', 'guest')->paginate(10);
        }

        $vips = User::where('role', 'VIP')->paginate(10);
    
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
                            ->paginate(10)->withQueryString();
        } else {
            $vips = User::where('role', 'VIP')->paginate(10);
        }
        
        $guests = User::where('role', 'guest')->paginate(10);
    
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

        $cutoffDateTime = new \DateTime('2024-05-27 23:59:59', new \DateTimeZone('Asia/Jakarta'));
        $currentDateTime = new \DateTime('now', new \DateTimeZone('Asia/Jakarta'));

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
                if ($currentDateTime > $cutoffDateTime){
                    return redirect()->back()->withErrors(['email' => 'Registration is closed. No new users can login.']);
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

    public function check(Request $request){
        $qrcode = $request->input('qr_code');

        $split = explode('+', $qrcode);
        $nim = $split[0];

        $nim = preg_replace('/\D/', '', $nim);

        $attendant = User::where('nim', $nim)->first();

        if ($attendant){
            $attendant->presence = 1;
            $attendant->save();
        }

        return redirect()->route('guestlist');
    }

    public function attendance($id){
        $user = User::where('id', $id)->first();

        if ($user){
            $user->presence = 1;
            $user->save();
        }

        return redirect()->route('guestlist');
    }

    public function uncheck($id){
        $user = User::where('id', $id)->first();

        if ($user){
            $user->presence = 0;
            $user->save();
        }

        return redirect()->route('guestlist');
    }
}
