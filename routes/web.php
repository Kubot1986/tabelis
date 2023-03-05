<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function() {
    // Workers
    Route::get('/', [\App\Http\Controllers\WorkerController::class, 'welcome'])->name('workers.welcome');
    Route::get('/workers', [\App\Http\Controllers\WorkerController::class, 'index'])->name('workers.index');
    Route::get('/workers/create', [\App\Http\Controllers\WorkerController::class, 'create'])->name('workers.create');
    Route::get('/workers/{id}', [\App\Http\Controllers\WorkerController::class, 'show'])->name('workers.show');
    Route::post('/workers/store', [\App\Http\Controllers\WorkerController::class, 'store'])->name('workers.store');
    Route::get('/workers/{id}/edit', [\App\Http\Controllers\WorkerController::class, 'edit'])->name('workers.edit');
    Route::put('/workers/{id}/update', [\App\Http\Controllers\WorkerController::class, 'update'])->name('workers.update');
    Route::delete('/workers/{id}/delete', [\App\Http\Controllers\WorkerController::class, 'destroy'])->name('workers.destroy');

    // Sites
    Route::get('/sites', [\App\Http\Controllers\SiteController::class, 'index'])->name('sites.index');
    Route::get('/sites/create', [\App\Http\Controllers\SiteController::class, 'create'])->name('sites.create');
    Route::get('/sites/{id}', [\App\Http\Controllers\SiteController::class, 'show'])->name('sites.show');
    Route::post('/sites/store', [\App\Http\Controllers\SiteController::class, 'store'])->name('sites.store');
    Route::get('/sites/{id}/edit', [\App\Http\Controllers\SiteController::class, 'edit'])->name('sites.edit');
    Route::put('/sites/{id}/update', [\App\Http\Controllers\SiteController::class, 'update'])->name('sites.update');
    Route::delete('/sites/{id}/delete', [\App\Http\Controllers\SiteController::class, 'destroy'])->name('sites.destroy');

    //Timecards
    Route::get('/timecards', [\App\Http\Controllers\TimecardController::class, 'index'])->name('timecards.index');
    Route::get('/timecards/create', [\App\Http\Controllers\TimecardController::class, 'create'])->name('timecards.create');
    Route::get('/timecards/{id}', [\App\Http\Controllers\TimecardController::class, 'show'])->name('timecards.show');
    Route::post('/timecards/store', [\App\Http\Controllers\TimecardController::class, 'store'])->name('timecards.store');
    Route::get('/timecards/{id}/edit', [\App\Http\Controllers\TimecardController::class, 'edit'])->name('timecards.edit');
    Route::put('/timecards/{id}/update', [\App\Http\Controllers\TimecardController::class, 'update'])->name('timecards.update');
    Route::delete('/timecards/{id}/delete', [\App\Http\Controllers\TimecardController::class, 'destroy'])->name('timecards.destroy');

});






require __DIR__.'/auth.php';
