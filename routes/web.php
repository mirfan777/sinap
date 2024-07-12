<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/loker', function () {
        return view('pages.job-search');
    });

    Route::get('/loker-detail', function () {
        return view('pages.job-detail');
    });

    Route::get('/course', function () {
        return view('pages.course-search');
    });

    Route::get('/course-detail', function () {
        return view('pages.course-detail');
    });

    
});

require __DIR__.'/auth.php';
