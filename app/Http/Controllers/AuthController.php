<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Mengelola proses login
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Autentikasi pengguna sebagai pengguna biasa
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan pengguna biasa ke halaman yang sesuai
            return redirect()->intended('/dashboard');
        }

        // Autentikasi pengguna sebagai administrator
        $adminCredentials = array_merge($credentials, ['is_admin' => true]);
        if (Auth::attempt($adminCredentials)) {
            // Jika autentikasi berhasil, arahkan administrator ke halaman administrasi
            return redirect()->intended('/admin/dashboard');
        }

        // Jika autentikasi gagal untuk kedua tingkatan, kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
    }


    /**
     * Mengelola proses logout
     */
    public function logout()
    {
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect('/login');
    }
}
