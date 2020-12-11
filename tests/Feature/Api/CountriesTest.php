<?php

namespace Tests\Feature\Api;

use Database\Seeders\CountrySeeder;
use Tests\TestCase;
use App\Models\Country;

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
