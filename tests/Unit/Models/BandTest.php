<?php

namespace Tests\Unit\Models;

use App\Models\Band;
use App\Models\Country;
use Database\Seeders\CountrySeeder;
use Tests\TestCase;

class BandTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
    */
    public function band_model_belongs_to_a_country()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $country = Country::query()->inRandomOrder()->first();
        $band = $this->create(Band::class, ['country_id' => $country->id]);

        $this->assertInstanceOf(Country::class, $band->country);
    }
}
