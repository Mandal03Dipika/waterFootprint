<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\SurveyQuestionController;
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
    return view('welcome');
})->middleware(['guest']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/question/index', [SurveyQuestionController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('question.index');

Route::get('/question/create', [SurveyQuestionController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('question.create');

Route::post('/question/store', [SurveyQuestionController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('question.store');

Route::get('/question/edit/{id}', [SurveyQuestionController::class, 'edit'])
    ->middleware(['auth', 'verified'])->name('question.edit');

Route::get('/question/delete/{id}', [SurveyQuestionController::class, 'destroy'])
    ->middleware(['auth', 'verified'])->name('question.delete');

Route::post('/question/update/{id}', [SurveyQuestionController::class, 'update'])
    ->middleware(['auth', 'verified'])->name('question.update');

Route::get('/survey/index', [SurveyController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('survey.index');

Route::get('/survey/fetchData', [SurveyController::class, 'fetchData'])
    ->middleware(['auth', 'verified'])->name('survey.fetchData');

Route::post('/survey/store', [SurveyController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('survey.store');

Route::get('/survey/over', [SurveyController::class, 'over'])
    ->middleware(['auth', 'verified'])->name('survey.over');

Route::get('/landing', function () {
    return view('landing');
})->middleware(['auth', 'verified'])->name('landing');

Route::get('/land', function () {
    return view('land');
})->middleware(['auth', 'verified'])->name('land');

Route::get('/about_us', function () {
    return view('layouts.about');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/action', function () {
    return view('layouts.action');
})->middleware(['auth', 'verified'])->name('action');

Route::get('/water_footprint', function () {
    return view('layouts.water_footprint');
})->middleware(['auth', 'verified'])->name('water_footprint');

Route::get('/calculator', function () {
    return view('layouts.calculator');
})->middleware(['auth', 'verified'])->name('calculator');

Route::get('/water', function () {
    return view('water');
})->middleware(['auth', 'verified'])->name('water');

Route::get('/login_main', function () {
    return view('login_main');
})->middleware(['auth', 'verified'])->name('login_main');

Route::get('/register_main', function () {
    return view('register_main');
})->middleware(['auth', 'verified'])->name('register_main');

Route::get('/terms', function () {
    return view('terms');
})->middleware(['auth', 'verified'])->name('terms');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Route::get('/', function () {
//     return view('water');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/landing', function () {
//     return view('landing');
// })->name('landing');

// Route::get('/land', function () {
//     return view('land');
// })->name('land');

// Route::get('/about_us', function () {
//     return view('layouts.about');
// })->name('about');

// Route::get('/action', function () {
//     return view('layouts.action');
// })->name('action');

// Route::get('/water_footprint', function () {
//     return view('layouts.water_footprint');
// })->name('water_footprint');

// Route::get('/water', function () {
//     return view('water');
// })->name('water');

// Route::get('/login_main', function () {
//     return view('login_main');
// })->name('login_main');

// Route::get('/register_main', function () {
//     return view('register_main');
// })->name('register_main');

// Route::get('/terms', function () {
//     return view('terms');
// })->name('terms');

// Route::middleware('auth')->group(function () {

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// });

require __DIR__ . '/auth.php';
