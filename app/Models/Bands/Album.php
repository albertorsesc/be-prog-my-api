<?php

namespace App\Models\Bands;

use Illuminate\Database\Eloquent\{
    Model,
    Factories\HasFactory,
    Relations\BelongsTo,
    Relations\HasMany
};

class Album extends Model
{
    use HasFactory;

    /* Relations */

    public function band() : BelongsTo
    {
        return $this->belongsTo(Band::class);
    }

    public function songs() : HasMany
    {
        return $this->hasMany(Song::class);
    }
}
