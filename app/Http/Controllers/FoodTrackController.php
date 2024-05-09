<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Makanan;
use Illuminate\Http\Request;

class FoodTrackController extends Controller
{
    //
    public function foodTrackBoard()
    {
        // Hitung total kalori dari database
        $totalCalories = Makanan::sum('kalori');

        return view('foodtrackboard', compact('totalCalories'));
    }

    public function pilihMakanan()
    {
        // Di sini Anda dapat mengambil data makanan dari database
        $jenisMakanan = ['Makanan Jenis 1', 'Makanan Jenis 2']; // Contoh data jenis makanan
        $makanan = ['Makanan 1', 'Makanan 2']; // Contoh data makanan

        return view('pilihmakanan', compact('jenisMakanan', 'makanan'));
    }

    public function logMakanan(Request $request)
    {
        // Di sini Anda dapat menangani penyimpanan log makanan ke database
        $makananId = $request->input('makanan');
        $makanan = Makanan::findOrFail($makananId);

        return view('logmakanan', compact('makanan'));
    }

}
