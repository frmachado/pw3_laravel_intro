<?php
use App\Models\User;
use App\Http\Controllers\LivroController;

Route::get('/livros', [LivroController::class, 'index'])
    ->name('livros.index');

Route::post('/livros', [LivroController::class, 'store'])
    ->name('livros.store');

Route::view('/landing','landing');
Route::view('/admin','admin.dashboard');

Route::get('/teste-orm', function (){
    User::create([
        'name' => 'Ana Clara Santos',
        'email' => 'ana.santos@escola.sp.gov.br',
        'password' => '12345678'
    ]);
    return User::all();
});