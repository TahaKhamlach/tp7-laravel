<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return 'Page À propos';
});

Route::get('/bonjour/{nom}', function ($nom) {
    return "Bonjour, $nom !";
});

Route::get('/calculer/{a}/{b}', function ($a, $b) {
    return $a + $b;
});

Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');
Route::get('/produits/{id}', [ProduitController::class, 'show'])->name('produits.show');

Route::resource('articles', ArticleController::class);