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

Route::get('/', function () {
    return view('water');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/land', function () {
    return view('land');
})->name('land');

Route::get('/about_us', function () {
    return view('layouts.about');
})->name('about');

Route::get('/action', function () {
    return view('layouts.action');
})->name('action');

Route::get('/water_footprint', function () {
    return view('layouts.water_footprint');
})->name('water_footprint');

Route::get('/water', function () {
    return view('water');
})->name('water');

Route::get('/login_main', function () {
    return view('login_main');
})->name('login_main');

Route::get('/register_main', function () {
    return view('register_main');
})->name('register_main');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
