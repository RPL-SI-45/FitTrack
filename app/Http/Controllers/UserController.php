<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Sesuaikan dengan model pengguna Anda

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data pengguna ke dalam database
        $user = new User();
        $user->name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Redirect pengguna ke halaman yang sesuai setelah pendaftaran berhasil
        return redirect('/sesi')->with('success', 'Registration successful!');
    }
}
