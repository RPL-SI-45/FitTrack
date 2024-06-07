<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BodyMassIndex;
use App\Models\Food;
use App\Models\WaterIntake;
use App\Models\Obat;

class Analytics extends Controller
{
    public function index()
    {
        // Ambil data BMI
        $bmiData = BodyMassIndex::orderBy("id", "desc")
            ->limit(5)
            ->get();

        // Ambil data Food Track
        $foodTrack = Food::orderBy("id", "desc")
            ->limit(5)
            ->get();

        // Ambil data Water Intake
        $waterIntakeData = WaterIntake::whereDate(
            "updated_at",
            ">",
            now()->subDays(1)
        )
            ->orderBy("id", "desc")
            ->get();

        // Ambil data obat
        $obats = Obat::orderBy('id', 'desc')->limit(5)->get();

        // Kirim semua data ke view dashboard
        return view(
            "content.dashboard.dashboards-analytics",
            compact("bmiData", "foodTrack", "waterIntakeData", "obats")
        );
    }
}
