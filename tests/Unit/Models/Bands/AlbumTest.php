<?php

namespace Tests\Unit\Models\Bands;

use Tests\TestCase;
use Database\Seeders\CountrySeeder;
use App\Models\Bands\{Song, Band, Album};

class AlbumTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
    */
    public function album_model_belongs_to_a_band()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $band = $this->create(Band::class);
        $album = $this->create(Album::class, ['band_id' => $band->id]);

        $this->assertInstanceOf(Band::class, $album->band);
    }

    /**
     * @test
     * @throws \Throwable
    */
    public function album_has_many_songs()
    {
        $this->loadSeeders([CountrySeeder::class]);

        $album = $this->create(Album::class);
        $this->create(Song::class, ['album_id' => $album->id]);

        $this->assertInstanceOf(Song::class, $album->songs->first());
    }
}
