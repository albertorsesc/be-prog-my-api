<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Band;

class BandsTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
    */
    public function get_all_bands()
    {
        $band = $this->create(Band::class);

        $response = $this->getJson(route('api.bands.index'));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                [
                    'id' => $band->id,
                    'name' => $band->name,
                ]
            ]
        ]);
    }
}
