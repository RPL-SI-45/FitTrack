<?php

namespace App\Http\Controllers\Layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\AdminFood;

class FoodTrack extends Controller
{
    public function index()
    {
        $foodTracks = Food::all();
        $totalKalori = Food::sum('kalori');

        return view('content.foodtrack.index', compact('foodTracks', 'totalKalori'));
    }

    public function create()
    {
        return view('content.foodtrack.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_makanan' => 'required',
            'nama_kalori' => 'required',
            'tanggal_makan' => 'required|date',
            'waktu_makan' => 'required',
        ]);

        // Splitting the input into nama menu and kalori
        if (strpos($request->input('nama_kalori'), ' - ') !== false) {
            $menuKalori = explode(' - ', $request->input('nama_kalori'));
            $validatedData['nama_menu'] = $menuKalori[0];
            $validatedData['kalori'] = intval($menuKalori[1]);
        } else {
            return redirect()->back()->withInput()->withErrors(['nama_kalori' => 'Format input tidak valid']);
        }

        try {
            Food::create($validatedData);
            return redirect()->route('content.foodtrack.index')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan dalam penyimpanan data. Silakan coba lagi.']);
        }
    }

    public function show(Food $foodTrack)
    {
        return view('content.foodtrack.show', compact('foodTrack'));
    }

    public function edit($id)
    {
        // Find the food track record by ID
        $foodTrack = Food::findOrFail($id);

        // Retrieve menu data based on jenis makanan for dropdown
        $jenisMakanan = $foodTrack->jenis_makanan;
        $menus = $this->getMenuData($jenisMakanan);

        return view('content.foodtrack.edit', compact('foodTrack', 'menus'));
    }

    public function update(Request $request, Food $foodTrack)
    {
        $validatedData = $request->validate([
            'jenis_makanan' => 'required',
            'nama_menu' => 'required',
            'kalori' => 'required|numeric',
            'tanggal_makan' => 'required|date',
            'waktu_makan' => 'required',
        ]);

        // Splitting the input into nama menu and kalori
        if (strpos($request->input('nama_menu'), ' - ') !== false) {
            $menuKalori = explode(' - ', $request->input('nama_menu'));
            $validatedData['nama_menu'] = $menuKalori[0];
            $validatedData['kalori'] = intval($menuKalori[1]);
        } else {
            return redirect()->back()->withInput()->withErrors(['nama_menu' => 'Format input tidak valid']);
        }

        $foodTrack->update($validatedData);

        return redirect()->route('content.foodtrack.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Food $foodTrack)
    {
        $foodTrack->delete();
        return redirect()->route('content.foodtrack.index')->with('success', 'Data berhasil dihapus');
    }

    public function getMenuData($jenisMakanan)
    {
        if ($jenisMakanan == 'makanan_utama') {
            $menus = AdminFood::select('id', 'nama_makanan_utama as nama_menu', 'kalori_utama as kalori')->get();
        } elseif ($jenisMakanan == 'makanan_ringan') {
            $menus = AdminFood::select('id', 'nama_makanan_ringan as nama_menu', 'kalori_ringan as kalori')->get();
        } elseif ($jenisMakanan == 'minuman') {
            $menus = AdminFood::select('id', 'nama_minuman as nama_menu', 'kalori_minuman as kalori')->get();
        } else {
            $menus = collect();
        }

        return $menus;
    }
}
