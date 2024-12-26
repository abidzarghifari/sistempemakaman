<?php

use App\Http\Controllers\Catattamucontroller;
use App\Http\Controllers\MakamController;
use App\Http\Controllers\kasController;
use App\Http\Controllers\pengurusController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/pencatatantamu', function () {
    return view('pencatatantamu');
})->name('pencatatantamu');

Route::resource('/pencatatantamu', Catattamucontroller::class)
    ->only(['create'])
    ->names(['create' => 'pencatatantamu']);;


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/pencarianmakam', function () {
    return view('pencarianmakam');
});

Route::get('/accountprofile', [ProfileController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('accountprofile');

Route::resource('/manajemenmakam', MakamController::class)
    ->only(['index'])
    ->middleware(['auth', 'verified'])
    ->names(['index' => 'manajemenmakam']);;

Route::resource('/manajemenkas', kasController::class)
    ->only(['index'])
    ->middleware(['auth', 'verified'])
    ->names(['index' => 'manajemenkas']);;


Route::resource('/manajementamu', TamuController::class)
    ->only(['index'])
    ->middleware(['auth', 'verified'])
    ->names(['index' => 'manajementamu']);;

Route::resource('/manajemenpengurus', pengurusController::class)
    ->only(['index'])
    ->middleware(['auth', 'verified'])
    ->names(['index' => 'manajemenpengurus']);;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 

require __DIR__.'/auth.php';
