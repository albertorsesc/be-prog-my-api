<?php

namespace Feature\Api;

use Tests\TestCase;
use Database\Seeders\CountrySeeder;

class CountriesTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
     * @endpoint ['GET' => '/api/countries']
     */
    public function get_all_countries()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $response = $this->getJson(route('api.countries.index'));
        $response->assertOk();
        $response->assertJsonStructure([
            'data' => [['id', 'name', 'code']]
        ]);
    }
}
