<?php

namespace App\Models\Bands;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    
    /* Relations */
    
    public function band() 
    {
        return $this->belongsTo(Band::class);
    }
}