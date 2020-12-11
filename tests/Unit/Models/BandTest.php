<?php

namespace Tests\Unit\Models;

use App\Models\Band;
use App\Models\Country;
use App\Models\Genre;
use Database\Seeders\CountrySeeder;
use Tests\TestCase;

class BandTest extends TestCase
{
    protected function setUp () : void
    {
        parent::setUp();
        $this->loadSeeders([CountrySeeder::class]);
    }

    /**
     * @test
     * @throws \Throwable
    */
    public function band_model_belongs_to_a_country()
    {
        $country = Country::query()->inRandomOrder()->first();
        $band = $this->create(Band::class, ['country_id' => $country->id]);

        $this->assertInstanceOf(Country::class, $band->country);
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function band_model_has_many_genres()
    {
        $genre = $this->create(Genre::class);
        $band = $this->create(Band::class);

        $band->genres()->attach($genre);

        $this->assertInstanceOf(Genre::class, $band->genres->first());
    }
}
