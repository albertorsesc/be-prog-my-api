<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    /* Relations */

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    
    public function genres() 
    {
        return $this->belongsToMany(Genre::class);
    }
}
