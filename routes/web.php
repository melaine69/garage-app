<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\OpeningController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::post('/', [PageController::class, 'filters'])->name('filters');
Route::get('/horaires', [PageController::class, 'opening'])->name('opening');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('privacy', function() {
    return view('pages.privacy');
})->name('privacy');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::resource('cars', CarController::class);

    Route::resource('users', UserController::class);

    Route::get('opening', [OpeningController::class, 'create'])->name('opening.create');
    Route::post('opening', [OpeningController::class, 'store'])->name('opening.store');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
