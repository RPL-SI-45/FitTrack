<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\BmiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\layouts\FoodTrack;
use App\Http\Controllers\WaterIntakeController;
use App\Http\Controllers\Admin\Dashboard as AdminDashboard;
use App\Http\Controllers\Admin\AdminFoodTrack;

// Session routes
Route::any('/sesi/login', [LoginController::class, 'login']);
Route::get('/sesi', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/sesi', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/register', [UserController::class, 'store'])->name('register');
Route::get('/sesi', [UserController::class, 'index'])->name('sesi.login');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');

    // Routes for role user
    Route::middleware(['role:user'])->group(function () {
        // Body Mass Index
        Route::get('/content/bmi', [BmiController::class, 'index'])->name('content.bmi.create');
        Route::post('/bmi/calculate', [BmiController::class, 'calculate'])->name('bmi.calculate');
        Route::get('/content/bmi/result', function () {
            return view('content.bmi.result');
        })->name('content.bmi.result');

        // Medication reminder
        Route::resource('content/obat', ObatController::class, ['as' => 'content']);

        // Water Intake Feature
        Route::get('/content/waterintake', [WaterIntakeController::class, 'index'])->name('drinktarget');
        Route::get('/water-intake-target', [WaterIntakeController::class, 'show'])->name('water_intake_target.show');
        Route::post('/water-intake-target', [WaterIntakeController::class, 'store'])->name('water_intake_target.store');
        Route::post('/water-intake-consumed', [WaterIntakeController::class, 'updateConsumed'])->name('water_intake_target.updateConsumed');
        Route::post('/water-intake-reset', [WaterIntakeController::class, 'resetConsumed'])->name('water_intake_target.resetConsumed');

        // Food Track
        Route::resource('content/foodtrack', FoodTrack::class, ['as' => 'content']);

        // API route for fetching menu data based on jenis makanan
        Route::get('/api/menu-data/{jenisMakanan}', [FoodTrack::class, 'getMenuData']);
    });

    // Routes for role admin
    Route::middleware(['role:admin'])->group(function () {
      Route::get('content/admin/foodtrack', [AdminFoodTrack::class, 'index'])->name('content.admin.foodtrack.index');
      Route::get('content/admin/foodtrack/create', [AdminFoodTrack::class, 'create'])->name('content.admin.foodtrack.create');
      Route::post('content/admin/foodtrack/store', [AdminFoodTrack::class, 'store'])->name('content.admin.foodtrack.store');
      Route::get('content/admin/foodtrack/{foodTrack}/edit', [AdminFoodTrack::class, 'edit'])->name('content.admin.foodtrack.edit');
      Route::put('content/admin/foodtrack/{foodTrack}', [AdminFoodTrack::class, 'update'])->name('content.admin.foodtrack.update');
      Route::delete('content/admin/foodtrack/{foodTrack}', [AdminFoodTrack::class, 'destroy'])->name('content.admin.foodtrack.destroy');

        // Admin routes can be defined here
    });
});
