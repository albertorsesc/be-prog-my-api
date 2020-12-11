<?php

namespace Feature\Api;

use App\Models\Genre;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenresTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
     * @endpoint ['GET' => '/api/genres']
     */
    public function get_all_genres()
    {
        $genre = $this->create(Genre::class);

        $response = $this->getJson(route('api.genres.index'));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                [
                    'id' => $genre->id,
                    'name' => $genre->name
                ]
            ]
        ]);
    }
}
