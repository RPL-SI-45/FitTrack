<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\layouts\BmiController;
use App\Http\Controllers\layouts\LoginController;
use App\Http\Controllers\layouts\AuthController;
use App\Http\Controllers\layouts\UserController;
use App\Http\Controllers\layouts\ObatController;
use App\Http\Controllers\layouts\FoodTrack;
use App\Http\Controllers\layouts\WaterIntakeController;
use App\Http\Controllers\Admin\AdminFoodTrack;
use App\Http\Controllers\Admin\adminArtikel;
use App\Http\Controllers\ArtikelController;


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

        // artikel
        Route::get('/content/artikel', [ArtikelController::class, 'index'])->name('content.artikel.index');
        Route::get('/artikel/search', [ArtikelController::class, 'index'])->name('artikel.search');
        Route::put('/artikel/{id}', 'ArtikelController@update')->name('artikel.update');


    });

    // Routes for role admin
    Route::middleware(['role:admin'])->group(function () {
      Route::get('/admin/foodtrack', [AdminFoodTrack::class, 'index'])->name('admin.foodtrack.index');
      Route::get('/admin/foodtrack/create', [AdminFoodTrack::class, 'create'])->name('admin.foodtrack.create');
      Route::post('/admin/foodtrack/store', [AdminFoodTrack::class, 'store'])->name('admin.foodtrack.store');
      Route::get('/admin/foodtrack/{foodTrack}/edit', [AdminFoodTrack::class, 'edit'])->name('admin.foodtrack.edit');
      Route::put('/admin/foodtrack/{foodTrack}', [AdminFoodTrack::class, 'update'])->name('admin.foodtrack.update');
      Route::delete('/admin/foodtrack/{foodTrack}', [AdminFoodTrack::class, 'destroy'])->name('admin.foodtrack.destroy');

      Route::resource('/admin/artikel', adminArtikel::class, ['as' => 'admin']);
      Route::get('/admin/artikel', [adminArtikel::class, 'index'])->name('admin.artikel.index');
      Route::get('/admin/artikel/create', [adminArtikel::class, 'create'])->name('admin.artikel.create');
      Route::post('/admin/artikel', [adminArtikel::class, 'store'])->name('admin.artikel.store');
      Route::get('/admin/artikel/{id}/edit', [adminArtikel::class, 'edit'])->name('admin.artikel.edit');
      Route::delete('/admin/artikel/{id}', [adminArtikel::class, 'destroy'])->name('admin.artikel.destroy');
      Route::put('admin/artikel/{id}', 'ArtikelController@update')->name('artikel.update');





        // Admin routes can be defined here
    });
});
