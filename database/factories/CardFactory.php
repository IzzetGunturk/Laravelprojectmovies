<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'tags' => $this->faker->words(3, true),
        ];
    }
}
