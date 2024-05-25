<?php

namespace App\Http\Controllers;

use App\Models\FoodTrack;
use App\Models\MealTime;
use Illuminate\Http\Request;

class FoodTrackController extends Controller
{
    public function index()
    {
        $foodTracks = FoodTrack::with('mealTime')->get();
        return view('food_tracks.index', compact('foodTracks'));
    }

    public function create()
    {
        $mealTimes = MealTime::all();
        return view('food_tracks.create', compact('mealTimes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_item' => 'required|string|max:255',
            'meal_time' => 'required|exists:meal_times,id',
            'meal_date' => 'required|date',
        ]);

        FoodTrack::create([
            'food_item' => $request->input('food_item'),
            'meal_time_id' => $request->input('meal_time'),
            'meal_date' => $request->input('meal_date'),
        ]);

        return redirect()->route('food_tracks.index')->with('success', 'Food track created successfully.');
    }

    // Remaining methods (show, edit, update, destroy) will follow the same pattern.
}
