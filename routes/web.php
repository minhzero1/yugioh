<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', [CardController::class, 'home']);
Route::get('/tra-cuu', [CardController::class, 'search']);
Route::get('/card/{id}', [CardController::class, 'show']);
Route::get('/ho-tro', function () {
    return view('support');
});