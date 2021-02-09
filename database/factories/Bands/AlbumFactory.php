<?php

namespace Database\Factories\Bands;

use App\Models\Bands\Album;
use App\Models\Bands\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'band_id' => Band::factory(),
            'title' => $this->faker->word,
            'released_at' => $this->faker->date('Y-m-d'),
        ];
    }
}
