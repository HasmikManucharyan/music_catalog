<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2), // Случайное название альбома
            'artist_id' => Artist::inRandomOrder()->first()->id, // Случайный исполнитель
            'release_year' => $this->faker->year, // Случайный год выпуска
        ];
    }
}
