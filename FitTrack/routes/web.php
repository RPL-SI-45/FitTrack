<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Route::get('/bmi' , 'BMIController@index');
// Route::post('/calculate/store','CalculatorController@result')->name('calculate.store');

// Route::get('/', function () {
//     return view('welcome')
// });

Route::get('/sesi',[LoginController::class,'index']);
Route::post('/sesi/login',[LoginController::class,'login']);
Route::get('/sesi', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/sesi', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/register', [UserController::class, 'store'])->name('register');

use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/bmi/create', [BMIController::class, 'create'])->name('bmi.create');
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');
Route::get('/food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');