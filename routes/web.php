<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserDetailController;
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
    return view('main');
});

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user resource controller for user details
Route::resource('user-details', UserDetailController::class)->only(['create', 'store', 'show', 'edit', 'update'])->middleware('auth');

// user resource controller for education
Route::resource('education', EducationController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])->middleware('auth');

// user resource controller for experience
Route::resource('experience', ExperienceController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])->middleware('auth');

// user resource controller for skill
Route::resource('skill', SkillController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])->middleware('auth');

require __DIR__ . '/auth.php';