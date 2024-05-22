<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/sesi', [LoginController::class, 'index']);
Route::any('/sesi/login', [LoginController::class, 'login']);
Route::get('/sesi', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/sesi', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/register', [UserController::class, 'store'])->name('register');

/* Body Mass Index */
Route::get('/bmi/create', [BmiController::class, 'create'])->name('bmi.create');
Route::post('/bmi/calculate', [BmiController::class, 'calculate'])->name('bmi.calculate');

/* Food Target */
Route::get('/food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');

/* FitHealth */
Route::any('/mainpage', function () {
    return view('mainpage');
});
Route::get('/homepage', function () {
    return view('homepage');
});
