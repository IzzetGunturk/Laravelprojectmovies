<?php
namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('index', ['cards' => $cards]);
    }

    public function show($id)
    {
        $selectedMovie = Card::find($id);
        $otherMovies = Card::where('id', '!=', $id)->get();

        return view('movie', ['movie' => $selectedMovie, 'otherMovies' => $otherMovies]);
    }
}
