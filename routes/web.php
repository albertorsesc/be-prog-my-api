<?php

    use App\Http\Controllers\Web\Bands\BandController;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('bands/show', [BandController::class, 'show'])->name('bands.show');
    Route::get('bands/create', [BandController::class, 'create'])->name('bands.create');
});
