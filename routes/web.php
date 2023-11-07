<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;



// Route::view('/', 'index');
// Route::view('/movie', 'movie');
Route::get('/', [CardController::class, 'index'])->name('home');;
Route::get('/movie/{id}', [CardController::class, 'show'])->name('movie.show');

