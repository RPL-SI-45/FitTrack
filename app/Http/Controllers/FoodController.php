<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function create()
    {
        return view('food.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'calories' => 'required|numeric',
        ]);

        Food::create($request->all());

        return redirect()->route('food.create')
                         ->with('success', 'Makanan Berhasil ditambahkan!');
    }
}
