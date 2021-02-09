<?php

namespace Database\Factories\Bands;

use App\Models\Bands\Album;
use App\Models\Bands\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'album_id' => Album::factory(),
            'title' => $this->faker->sentence,
            'duration' => '7:20',
            'written_by' => $this->faker->name,
        ];
    }
}
