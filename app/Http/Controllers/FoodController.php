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

    public function list()
    {
        $data = Food::all();
        return view('food.list', [
            "foods" => $data
        ]);
    }

    public function show(int $id)
    {
        $data = Food::where('id', $id)->first();
        return view('food.edit', [
            'id' => $id,
            'name' => $data->name,
            'protein' => $data->protein,
            'calories' => $data->calories
        ]);
    }

    public function update(int $id)
    {
        // Validate the incoming request data
        request()->validate([
            'name' => 'required|string|max:255',
            'protein' => 'required|',
            'calories' => 'required|numeric|min:0'
        ]);

        Food::where('id', $id)->update([
            "name" => request()->get('name'),
            "protein" => request()->get('protein'),
            "calories" => request()->get('calories'),
        ]);
        return redirect()->route('food.get', ['id' => $id])->with('success', 'Makanan Berhasil diedit!');
    }

    public function delete(int $id) {
        Food::where('id', $id)->delete();
        return redirect()->route('food');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'protein' => 'required',
            'calories' => 'required|numeric',
        ]);

        Food::create($request->all());

        return redirect()->route('food.create')
                         ->with('success', 'Makanan Berhasil ditambahkan!');
    }
}
