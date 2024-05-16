<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function create()
    {
        return view('bmi.create');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'age' => 'required|numeric',
            'activity_level' => 'required',
        ]);

        $weight = $request->weight;
        $height = $request->height / 100; // converting to meters
        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
            $category = 'Underweight';
        }else if ($bmi < 24.9) {
            $category = 'Normal weight';
        } else if ($bmi < 29.9) {
            $category = 'Overweight';
        } else {
            $category = 'Obese';
        }

        return view('bmi.result', compact('bmi','category'));
    }
}