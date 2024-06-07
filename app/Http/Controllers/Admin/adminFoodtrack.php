<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminFood;

class AdminFoodtrack extends Controller
{
    // Menampilkan semua data
    public function index()
    {
    $foods = AdminFood::all();
    return view('content.admin.foodtrack.index', compact('foods'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('content.admin.foodtrack.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_makanan_utama' => 'required',
            'kalori_utama' => 'required|numeric',
            'nama_makanan_ringan' => 'required',
            'kalori_ringan' => 'required|numeric',
            'nama_minuman' => 'required',
            'kalori_minuman' => 'required|numeric',
        ]);

        $foodTrack = new AdminFood();
        $foodTrack->nama_makanan_utama = $request->nama_makanan_utama;
        $foodTrack->kalori_utama = $request->kalori_utama;
        $foodTrack->nama_makanan_ringan = $request->nama_makanan_ringan;
        $foodTrack->kalori_ringan = $request->kalori_ringan;
        $foodTrack->nama_minuman = $request->nama_minuman;
        $foodTrack->kalori_minuman = $request->kalori_minuman;
        $foodTrack->save();

        return redirect()->route('content.admin.foodtrack.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
    $foodTrack = AdminFood::findOrFail($id);
    $menu = AdminFood::all();
    return view('content.admin.foodtrack.edit', compact('foodTrack', 'menu'));
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_makanan_utama' => 'required',
            'kalori_utama' => 'required|numeric',
            'nama_makanan_ringan' => 'required',
            'kalori_ringan' => 'required|numeric',
            'nama_minuman' => 'required',
            'kalori_minuman' => 'required|numeric',
        ]);

        $foodTrack = AdminFood::findOrFail($id);
        $foodTrack->nama_makanan_utama = $request->nama_makanan_utama;
        $foodTrack->kalori_utama = $request->kalori_utama;
        $foodTrack->nama_makanan_ringan = $request->nama_makanan_ringan;
        $foodTrack->kalori_ringan = $request->kalori_ringan;
        $foodTrack->nama_minuman = $request->nama_minuman;
        $foodTrack->kalori_minuman = $request->kalori_minuman;
        $foodTrack->save();

        return redirect()->route('content.admin.foodtrack.index')->with('success', 'Menu berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $foodTrack = AdminFood::findOrFail($id);
        $foodTrack->delete();

        return redirect()->route('content.admin.foodtrack.index')->with('success', 'Menu berhasil dihapus.');
    }
}
