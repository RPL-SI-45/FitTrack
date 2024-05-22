<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('sesi.login');
    }

    public function login(Request $request)
    {
        // Logika autentikasi login
    }

    public function showRegistrationForm()
    {
        return view('sesi.register'); // Gunakan tampilan register untuk formulir registrasi
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/sesi')->with('success', 'Registrasi berhasil! Silakan login.');
}

}