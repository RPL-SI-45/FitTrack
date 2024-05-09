<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/bmi/create', [BMIController::class, 'create'])->name('bmi.create');
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');
Route::get('/food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');
