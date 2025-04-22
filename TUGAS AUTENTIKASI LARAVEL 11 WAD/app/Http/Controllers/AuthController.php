<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun; 
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Cari user dari tabel 'akun' hehehe
        $akun = Akun::where('username', $request->username)->first();

        // Cek apakah user ditemukan dan password cocok ga cuy
        if ($akun && Hash::check($request->password, $akun->password)) {
            // Simpan info login ke session manual (mff blm paham cara make yg default laravel pak)
            session(['logged_in_user' => $akun->username]);

            return redirect()->route('perpustakaan');
        } else {
            return back()->with('error', 'Username atau password salah!');
        }
    }
}
