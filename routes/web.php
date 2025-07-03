<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExploradorController;
use Illuminate\Support\Facades\Route;


//Página inicial
Route::get('/', function () {
    return view('welcome');
});
//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/exploradores', [ExploradorController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('exploradores.create');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/exploradores', [ExploradorController::class, 'index'])->name('dashboard.exploradores');
})->name('exploradores.index');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
