<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bands', [\App\Http\Controllers\Api\BandController::class, 'index'])->name('api.bands.index');
Route::get('countries', \App\Http\Controllers\Api\CountryController::class)->name('api.countries.index');
