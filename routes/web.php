<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EventoController;

Route::get('/livros', [LivroController::class, 'index'])
    ->name('livros.index');

Route::post('/livros', [LivroController::class, 'store'])
    ->name('livros.store');

Route::get('/eventos', [EventoController::class, 'index'])
    ->name('eventos.index');

Route::get('/eventos/novo', [EventoController::class, 'create'])
    ->name('eventos.create');

Route::post('/eventos', [EventoController::class, 'store'])
    ->name('eventos.store');
