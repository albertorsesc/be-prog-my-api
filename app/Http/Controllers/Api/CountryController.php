<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function __invoke ()
    {
        return response()->json([
            'data' => Country::query()->orderBy('name')->get(),
        ], 200);
    }
}
