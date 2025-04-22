<?php

// NOTES
// USERNAME : admin , langstar20@gmail.com
// Password: 12345



use App\Http\Controllers\Halo\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/halo',[HaloController::class, 'index']);

use App\Models\Perpustakaan;

use App\Http\Controllers\AuthController;
// Route Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);

// Route Perpustakaan 
Route::get('/perpustakaan', function () {
    $buku = Perpustakaan::all();
    return view('perpustakaan.index', compact('buku'));
})->name('perpustakaan');

use Illuminate\Support\Facades\Auth;

// Route Logout 
Route::post('/logout', function () {
    Auth::logout(); // keluarin user dari session
    return redirect()->route('login'); // kembali ke halaman login
})->name('logout');
