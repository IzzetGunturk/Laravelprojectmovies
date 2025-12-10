<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Tests\TestCase;
use App\Models\Card;
use App\Repositories\CardRepository;

class CardControllerTest extends TestCase
{
    
    public function test_show_selected_movie(): void 
    {
        // given
        $movie = (object)[
            'id' => 1,
            'title' => 'Jumanji',
            'image' => 'images/jumanji.png',
            'description' => 'Lorem ipsum dolor sit amet...'
        ];

        $mock = \Mockery::mock(CardRepository::class);

        $mock->shouldReceive('getMovieById')->with(1)->andReturn($movie);
        $mock->shouldReceive('getOtherMovies')->with(1)->andReturn(collect());

        $this->app->instance(CardRepository::class, $mock);

        // when
        $response = $this->get(route('movie.show', 1));

        // then
        $response->assertSee('Jumanji');
    }

    public function test_show_all_movies(): void 
    {
        // given
        $cards = collect([
            (object)['id' => 1,'title' => 'Jumanji'],
            (object)['id' => 2,'title' => 'Smile'],
            (object)['id' => 3,'title' => 'Sonic'],
        ]);

        $mock = \Mockery::mock(CardRepository::class);

        $mock->shouldReceive('all')->andReturn($cards);

        $this->app->instance(CardRepository::class, $mock);

        // when
        $response = $this->get(route('cards.index'));

        // then
        $response->assertSee('Jumanji');
        $response->assertSee('Smile');
        $response->assertSee('Sonic');
    }

    public function test_show_other_movies_when_selected_movie(): void 
    {
        // given
        $selectedMovie = collect([
            (object)['id' => 1,'title' => 'Jumanji'],
        ]);

        $otherMovies = collect([
            (object)['id' => 2,'title' => 'Black Mirror'],
            (object)['id' => 3,'title' => 'Joker'],
            (object)['id' => 4,'title' => 'Squid Game'],
        ]);


        $mock = \Mockery::mock(CardRepository::class);

        $mock->shouldReceive('getMovieById')->with(1)->andReturn($selectedMovie);
        $mock->shouldReceive('getOtherMovies')->with(1)->andReturn($otherMovies);

        $this->app->instance(CardRepository::class, $mock);

        // when
        $response = $this->get(route('movie.show', 1));

        // given
        $response->assertSee('Jumanji');
        $response->assertSee('Black Mirror');
        $response->assertSee('Joker');
        $response->assertSee('Squid Game');
    }
}
