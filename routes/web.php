<?php

use Illuminate\Support\Facades\Route;
use App\Models\Card;

Route::get('/', function () {
    $keyword = request('keyword');

    $cards = Card::when($keyword, function ($query) use ($keyword) {
        $query->where('name', 'like', '%' . $keyword . '%');
    })->get();

    return view('home', ['cards' => $cards]);
});
Route::get('/card/{id}', function ($id) {
    $card = Card::findOrFail($id);

    return view('card-detail', ['card' => $card]);
});