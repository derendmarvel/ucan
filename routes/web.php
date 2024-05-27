<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/signin', [UserController::class, 'store'])->name('signin');

Route::get('/guestlist', [UserController::class, 'guestlist'])->middleware('admin')->name('guestlist');
Route::get('/guests', [UserController::class, 'guestSearch'])->middleware('admin')->name('guestSearch');
Route::get('/vips', [UserController::class, 'vipSearch'])->middleware('admin')->name('vipSearch');
Route::post('/attendanceCheck', [UserController::class, 'check'])->middleware('admin')->name('attendanceCheck');
Route::get('/manualCheck/{id}', [UserController::class, 'attendance' ])->middleware('admin')->name('manualCheck');
Route::get('/uncheck/{id}', [UserController::class, 'uncheck' ])->middleware('admin')->name('uncheck');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/info', function () {
    return view('details');
})->middleware('normalguest')->name('info');

Route::get('/infovip', function () {
    return view('detailsvip');
})->middleware('vip')->name('infovip');

Route::get('/download', [PDFController::class, 'download'])->name('download');

Route::get('/pdfview', [PDFController::class, 'view'])->name('pdf');

Route::get('/allguests', [PDFController::class, 'allguests'])->name('allguests');

Auth::routes();
