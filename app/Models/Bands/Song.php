<?php

namespace App\Models\Bands;

use Illuminate\Database\Eloquent\{Model, Relations\BelongsTo, Factories\HasFactory};

class Song extends Model
{
    use HasFactory;

    /* Relations */

    public function album() : BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
