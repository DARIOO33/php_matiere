<?php

use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return 'Bonjour';
});

Route::get('/vue1', function () {
    return view('vue1');
});

Route::get('/article/{n}', function ($n) {
    return view('article')->with('numero', $n);
});

Route::get('/articles', function () {
    return view('v1');
});

Route::get('/fournisseurs', function () {
    return view('v2');
});

Route::get('/matiere', [MatController::class, 'index'])->name('matiere');
Route::get('/matiere/{codemat}/epreuves', [MatController::class, 'epreuves'])->name('matiere.epreuves');
Route::post('/matiere/store', [MatController::class, 'store'])->name('matiere.store');

Route::get('/epreuve', [EpreuveController::class, 'index'])->name('epreuve');
Route::get('/epreuve/{numepreuve}/matiere', [EpreuveController::class, 'matiere'])->name('epreuve.matiere');
Route::post('/epreuve/store', [EpreuveController::class, 'store'])->name('epreuve.store');

Route::get('/matiere/ajouter', [MatController::class, 'create'])->name('matiere.create');

Route::get('/epreuve/ajouter', [EpreuveController::class, 'create'])->name('epreuve.create');
