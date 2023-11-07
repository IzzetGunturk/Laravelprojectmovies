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
            'image' => '/images/avengers.jpeg',
            'title' => 'Avengers',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '5',
            'image' => '/images/beckham.jpg',
            'title' => 'Save Our Squad',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '6',
            'image' => '/images/blackmirror.jpg',
            'title' => 'Black Mirror',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '7',
            'image' => '/images/blackpanther.jpg',
            'title' => 'Black Panther',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '8',
            'image' => '/images/homealone.jpg',
            'title' => 'Home Alone',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '9',
            'image' => '/images/joker.avif',
            'title' => 'Joker',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '10',
            'image' => '/images/jumanji.jpg',
            'title' => 'Jumanji',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '11',
            'image' => '/images/smile.png',
            'title' => 'Smile',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.',
            'tags' => ['#photography', '#travel', '#fall'],
        ],
        [
            'id' => '12',
            'image' => '/images/squidgame.webp',
            'title' => 'Squid Game',
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
        $selectedMovie = collect($this->cards)->firstWhere('id', $id); 

        $otherMovies = collect($this->cards)->whereNotIn('id', [$id]);
        
        return view('movie', ['movie' => $selectedMovie, 'otherMovies' => $otherMovies]);
    }
}
