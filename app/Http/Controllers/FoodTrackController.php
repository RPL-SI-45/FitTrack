<?php

namespace App\Http\Controllers;

use App\Models\FoodTrack;
use App\Models\MealTime;
use Illuminate\Http\Request;

class FoodTrackController extends Controller
{
    public function index()
    {
        $foodTracks = FoodTrack::with('MealTime')->get();
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
        'meal_time' => 'required|in:Sarapan,Makan Siang,Makan Malam',
        'meal_date' => 'required|date',
    ]);

    return redirect()->route('food_tracks.index')->with('success', 'Food track created successfully.');
}


    // Remaining methods (show, edit, update, destroy) will follow the same pattern.
}


