<?php

namespace App\Http\Controllers\Api;

use App\Models\Bands\Band;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Bands\BandResource;

class BandController extends Controller
{
    public function index()
    {
        return BandResource::collection(
            Band::query()
                ->with(['country', 'genres'])
                ->get()
        );
    }
}
