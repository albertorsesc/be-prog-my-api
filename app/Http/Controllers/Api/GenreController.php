<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __invoke ()
    {
        return response()->json([
            'data' => Genre::query()->orderBy('name')->get()
        ], 200);
    }
}
