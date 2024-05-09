<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\FoodTrackController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/bmi/create', [BMIController::class, 'create'])->name('bmi.create');
<<<<<<< Updated upstream
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');
=======
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');
Route::get('/foodtrackboard', [FoodTrackController::class, 'foodTrackBoard'])->name('foodtrackboard');
Route::get('/pilihmakanan', [FoodTrackController::class, 'pilihMakanan'])->name('pilihmakanan');
Route::post('/logmakanan', [FoodTrackController::class, 'logMakanan'])->name('logmakanan');
>>>>>>> Stashed changes
