<?php

namespace Tests\Unit\Models\Bands;

use App\Models\Bands\Album;
use App\Models\Bands\Song;
use Database\Seeders\CountrySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SongTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @throws \Throwable
    */
    public function song_belongs_to_an_album()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $song = $this->create(Song::class);
        $this->assertInstanceOf(Album::class, $song->album);
    }
}
