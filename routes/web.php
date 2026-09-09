<?php
<<<<<<< Updated upstream
use App\Http\Controllers\LivroController;

Route::get('/livros', [LivroController::class, 'index'])
    ->name('livros.index');
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/usuarios/novo',[UserController::class, 'create']);

Route::post('usuarios', [UserController::class, 'store']);

Route::view('/landing','landing');

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);
>>>>>>> Stashed changes

Route::post('/livros', [LivroController::class, 'store'])
    ->name('livros.store');