<?php

namespace Tests\Feature\Api\Bands;

use Tests\TestCase;
use App\Models\Bands\{Band, Album, Song};
use Database\Seeders\CountrySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SongsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @throws \Throwable
     * @endpoint ['GET' => '/api/bands']
     */
    public function get_all_songs_for_an_album()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $album = $this->create(Album::class);
        $song = $this->create(Song::class, ['album_id' => $album->id]);

        $response = $this->getJson(route('api.albums.songs.index', $album));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                [
                    'id' => $song->id,
                    'title' => $song->title,
                    'duration' => $song->duration,
                    'written_by' => $song->written_by,
                ]
            ]
        ]);
    }
}
