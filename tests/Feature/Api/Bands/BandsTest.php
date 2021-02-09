<?php

namespace Tests\Feature\Api\Bands;

use Tests\TestCase;
use App\Models\Bands\Band;
use App\Models\Genre;
use Database\Seeders\CountrySeeder;

class BandsTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
     * @endpoint ['GET' => '/api/bands']
    */
    public function get_all_bands()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $band = $this->create(Band::class);
        $band->genres()->attach($this->create(Genre::class));

        $response = $this->getJson(route('api.bands.index'));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                [
                    'id' => $band->id,
                    'name' => $band->name,
                    'country' => ['id' => $band->country->id],
                    'genres' => [['id' => $band->genres->first()->id]],
                ]
            ]
        ]);
    }
}
