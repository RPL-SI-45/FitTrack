<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BmiRecord;
use App\Models\body_mass_indices;
use App\Models\BodyMassIndex;

class BmiController extends Controller
{
    public function create()
    {
        return view('bmi.create');
    }

    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'age' => 'required|numeric',
            'activity_level' => 'required',
        ]);

        // Simpan data ke dalam database
        $bmiRecord = BodyMassIndex ::create($validatedData);

        $weight = $validatedData['weight'];
        $height = $validatedData['height'] / 100; // converting to meters
        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
            $category = 'Underweight';
        } else if ($bmi < 24.9) {
            $category = 'Normal weight';
        } else if ($bmi < 29.9) {
            $category = 'Overweight';
        } else {
            $category = 'Obese';
        }

        return view('bmi.result', compact('bmi', 'category'));
    }
}
