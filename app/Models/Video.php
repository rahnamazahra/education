<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "path"
    ];

    // protected $appends = ['get_duration_in_seconds'];

    // public function getDurationInSecondsAttribute()
    // {
    //     $parts = explode(':', $this->duration);
    //     return $parts[0] * 3600 + $parts[1] * 60 + $parts[2];
    // }

}
