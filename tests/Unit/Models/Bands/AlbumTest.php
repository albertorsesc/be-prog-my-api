<?php

namespace Tests\Unit\Models\Bands;

use Tests\TestCase;
use App\Models\Bands\Band;
use App\Models\Bands\Album;
use Database\Seeders\CountrySeeder;

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
}
