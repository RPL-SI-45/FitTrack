<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/bmi/create', [BMIController::class, 'create'])->name('bmi.create');
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');
Route::get('/food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');

Route::any('/FitHealth/mainpage', function () { return view ('FitHealth.mainpage'); });

Route::get('/FitHealth/homepage', function () { return view ('FitHealth.homepage'); });

Route::any('/user/register', function  () { return view ('user.register');   });

Route::any('/user/login', function ()    { return view ('user.login');    });

