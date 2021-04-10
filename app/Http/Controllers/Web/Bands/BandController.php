<?php

namespace App\Http\Controllers\Web\Bands;

use App\Http\Controllers\Controller;

class BandController extends Controller
{
    public function create()
    {
        return view('bands.create');
    }

    public function show()
    {
        return view('bands.show');
    }
}
