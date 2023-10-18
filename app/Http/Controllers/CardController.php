<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    
    private $cards = [
        [
            'id' => '1',
            'image' => '/images/joker.jpg',
            'title' => 'Joker',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#winter'],
        ],
        [
            'id' => '2',
            'image' => '/images/parasite.jpg',
            'title' => 'Parasite',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#summer'],
        ],
        [
            'id' => '3',
            'image' => '/images/sonic.jpg',
            'title' => 'Sonic',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '4',
            'image' => '/images/sonic.jpg',
            'title' => 'Forest',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
    ];

    public function index()
    {
        return view('index', ['cards' => $this->cards]);
    }

    public function show($id)
    {
        // Find the movie in the array based on its ID
        $movie = collect($this->cards)->firstWhere('id', $id); 
        
        return view('movie', ['movie' => $movie]);
    }
}
