<?php
namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Repositories\CardRepository;

class CardController extends Controller
{
    protected $cards;

    public function __construct(CardRepository $cards)
    {
        $this->cards = $cards;
    }

    public function index()
    {
        $cards = $this->cards->all();
        return view('index', compact('cards'));
    }

    public function show($id)
    {
        $selectedMovie = $this->cards->getMovieById($id);
        $otherMovies = $this->cards->getOtherMovies($id);

        return view('movie', compact('selectedMovie', 'otherMovies'));
    }
}
