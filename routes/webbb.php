<?php
use App\Http\Controllers\LivroController;

Route::get('/livros', [LivroController::class, 'index'])
    ->name('livros.index');

Route::post('/livros', [LivroController::class, 'store'])
    ->name('livros.store');