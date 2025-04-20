<?php

use App\Http\Controllers\Halo\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/halo', function() {
    
//     return view('coba.halo');
// }
// );

Route::get('/halo',[HaloController::class, 'index']);

use App\Models\Perpustakaan;

Route::get('/perpustakaan', function () {
    $buku = Perpustakaan::all();
    return view('perpustakaan.index', compact('buku'));
});
