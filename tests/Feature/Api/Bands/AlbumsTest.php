<?php

namespace Tests\Feature\Api\Bands;

use Tests\TestCase;
use App\Models\Bands\Album;
use Database\Seeders\CountrySeeder;

class AlbumsTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
     * @endpoint ['GET' => '/api/albums']
     */
    public function get_all_albums()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $album = $this->create(Album::class);

        $response = $this->getJson(route('api.albums.index'));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                [
                    'id' => $album->id,
                    'band' => ['id' => $album->band->id],
                    'title' => $album->title,
                    'releasedAt' => $album->released_at
                ]
            ]
        ]);
    }
}
