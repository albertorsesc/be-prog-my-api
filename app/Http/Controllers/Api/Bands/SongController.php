<?php

namespace App\Http\Controllers\Api\Bands;

use App\Models\Bands\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Bands\SongResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SongController extends Controller
{
    public function __invoke (Album $album) : AnonymousResourceCollection
    {
        return SongResource::collection($album->songs);
    }
}
