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

// Rota para o dashboard com middleware de autenticação e verificação de email
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/exploradores', [ExploradorController::class, 'index'])->name('dashboard.exploradores');
});

// Listar exploradores
Route::get('/exploradores', [ExploradorController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('exploradores.index');
 

// Salvar novo explorador
Route::post('/exploradores', [ExploradorController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('exploradores.store');

// Formulário de cadastro
Route::get('/exploradores/create', [ExploradorController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('exploradores.create');    

//Formulário de atualização (GET)
Route::get('/exploradores/atualizar', [ExploradorController::class, 'atualizar'])
    ->middleware(['auth', 'verified'])
    ->name('exploradores.atualizar');

// Atualizar localização (POST)
Route::post('/exploradores/atualizar', [ExploradorController::class, 'atualizarPost'])
    ->middleware(['auth', 'verified'])
    ->name('exploradores.atualizar.post');

//Rota de sucesso
Route::get('/exploradores/sucesso', function () {
    return view('exploradores.sucesso');
})->name('exploradores.sucesso');    

//Rota de itens
Route::get('/exploradores/itens', [ExploradorController::class, 'verItems'])
    ->middleware(['auth', 'verified'])
    ->name('exploradores.itens');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
