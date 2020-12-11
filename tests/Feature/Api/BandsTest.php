<?php

namespace Feature\Api;

use Tests\TestCase;
use App\Models\Band;
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

        $response = $this->getJson(route('api.bands.index'));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                [
                    'id' => $band->id,
                    'name' => $band->name,
                    'country' => ['id' => $band->country->id],
                ]
            ]
        ]);
    }
}
