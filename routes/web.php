<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\DailyTargetController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/bmi/create', [BMIController::class, 'create'])->name('bmi.create');
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');
Route::get('/food/list', [FoodController::class, 'list'])->name('food');
Route::get('/food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');
Route::get('/food/get/{id}', [FoodController::class, 'show'])->name('food.get');
Route::post('/food/edit/{id}', [FoodController::class, 'update'])->name('food.edit');
Route::get('/food/delete/{id}', [FoodController::class, 'delete'])->name('food.delete');

Route::any('/mainpage', function () { return view ('mainpage'); });

Route::get('/homepage', function () { return view ('homepage'); });

Route::any('/signup', function  () { return view ('signup');   });

Route::any('/login', function ()    { return view ('login');    });

Route::resource('targets', TargetController::class);
Route::resource('daily_targets', DailyTargetController::class);
Route::get('daily_targets/{dailyTarget}/record_intake', [DailyTargetController::class, 'recordIntake'])->name('daily_targets.recordIntake');
Route::post('daily_targets/{dailyTarget}/store_intake', [DailyTargetController::class, 'storeIntake'])->name('daily_targets.storeIntake');