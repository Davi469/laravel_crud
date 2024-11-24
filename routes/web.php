<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\CategoriaController;

use App\Http\Controllers\EditoraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/livros', [LivroController::class,'index'])->name('livros.index');
Route::get('/livros/create', [LivroController::class,'create'])->name('livros.create');
Route::post('/livros/create', [LivroController::class,'store'])->name('livros.store');
Route::get('/livros/{livro}', [LivroController::class,'show'])->name('livros.show');
Route::get('/livros/{livro}/edit', [LivroController::class,'edit'])->name('livros.edit');
Route::put('/livros/{livro}', [LivroController::class,'update'])->name('livros.update');
Route::delete('/livros/{livro}', [LivroController::class,'destroy'])->name('livros.destroy');

Route::get('/editoras', [EditoraController::class,'index'])->name('editoras.index');
Route::get('/editoras/create', [EditoraController::class,'create'])->name('editoras.create');
Route::post('/editoras/create', [EditoraController::class,'store'])->name('editoras.store');
Route::get('/editoras/{editora}', [EditoraController::class,'show'])->name('editoras.show');
Route::get('/editoras/{editora}/edit', [EditoraController::class,'edit'])->name('editoras.edit');
Route::put('/editoras/{editora}', [EditoraController::class,'update'])->name('editoras.update');
Route::delete('/editoras/{editora}', [EditoraController::class,'destroy'])->name('editoras.destroy');


Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class,'create'])->name('categorias.create');
Route::post('/categorias/create', [CategoriaController::class,'store'])->name('categorias.store');
Route::get('/categorias/{categoria}', [CategoriaController::class,'show'])->name('categorias.show');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class,'edit'])->name('categorias.edit');
Route::put('/categorias/{categoria}', [CategoriaController::class,'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class,'destroy'])->name('categorias.destroy');

});

require __DIR__.'/auth.php';
