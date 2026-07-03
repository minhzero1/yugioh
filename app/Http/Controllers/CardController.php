<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function home()
    {
        $totalCards = Card::count();
        $featuredCards = Card::whereNotNull('image')->inRandomOrder()->limit(6)->get();

        return view('home', compact('totalCards', 'featuredCards'));
    }

    public function search(Request $request)
    {
        $cards = Card::when($request->keyword, fn($q) => $q->where('name', 'like', '%' . $request->keyword . '%'))
            ->when($request->type, fn($q) => $q->where('type', $request->type))
            ->when($request->attribute, fn($q) => $q->where('attribute', $request->attribute))
            ->orderBy('name')
            ->paginate(20)
            ->withQueryString();

        $types = Card::select('type')->distinct()->orderBy('type')->pluck('type');
        $attributes = Card::select('attribute')->whereNotNull('attribute')->distinct()->orderBy('attribute')->pluck('attribute');

        return view('search', compact('cards', 'types', 'attributes'));
    }

    public function show($id)
    {
        $card = Card::findOrFail($id);
        return view('card-detail', ['card' => $card]);
    }
}