<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\BodyMassIndex;
use App\Models\Food;
use App\Models\WaterIntake;
use App\Models\Obat;
use App\Models\Artikel; // Tambahkan model Artikel

class Analytics extends BaseController
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

        // Ambil data artikel
        $articles = Artikel::orderBy('id', 'desc')->limit(5)->get(); // Ubah sesuai model dan nama kolomnya

        // Kirim semua data ke view dashboard
        return view(
            "content.dashboard.dashboards-analytics",
            compact("bmiData", "foodTrack", "waterIntakeData", "obats", "articles") // Tambahkan $articles ke dalam compact
        );
    }
}
