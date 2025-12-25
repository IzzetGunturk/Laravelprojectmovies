<?php

namespace App\Repositories;

use App\Models\Card;

class CardRepository
{
    public function all()
    {
        return Card::all();
    }

    public function getMovieById($id)
    {
        return Card::find($id);
    }

    public function getOtherMovies($id)
    {
        return Card::where('id', '!=', $id)->get();
    }
}

