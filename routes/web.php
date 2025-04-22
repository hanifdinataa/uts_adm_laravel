<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\RuanganDashboardController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DosenDashboardController;
use App\Http\Controllers\ProdiDashboardController;
use App\Models\Dosen;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('/', function () {
    return view('welcome');
});


/// frontend
Route::get('/mahasiswa', [MahasiswaController::class,'index']);

Route::get('/prodi', [ProdiController::class,'index']);
Route::get('/dosen', [DosenController::class,'index']);
Route::get('/ruangan', [RuanganController::class,'index']);


///logout
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate']);

/// mahasiswa backend
Route::resource('/mahasiswa-dashboard', MahasiswaDashboardController::class);

/// ruangan
Route::resource('/ruangan-dashboard', RuanganDashboardController::class);

/// dosen backend
Route::resource('/dosen-dashboard', DosenDashboardController::class);

/// prodi backend
Route::resource('/prodi-dashboard', ProdiDashboardController::class);

/// Logout
route::post('/logout', [LoginController::class, 'logout']);

// /// logout
// Route::post('/logout', function () {
//     Auth::logout();
//     request()->session()->invalidate(); 
//     request()->session()->regenerateToken(); 
//     return redirect('/login')->with('success', 'Anda berhasil logout.');
// })->name('logout');



