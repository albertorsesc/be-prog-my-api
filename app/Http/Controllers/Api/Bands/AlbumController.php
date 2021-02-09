<?php

namespace App\Http\Controllers\Api\Bands;

use App\Models\Bands\Album;
use App\Http\Controllers\Controller;
use App\Http\Resources\Bands\AlbumResource;

class AlbumController extends Controller
{
    public function __invoke ()
    {
        return AlbumResource::collection(
            Album::query()
                 ->with('band')
                 ->orderBy('title')
                 ->get()
        );
    }
}
