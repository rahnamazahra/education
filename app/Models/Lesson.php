<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
    ];

    public function video(): HasOne
    {
        return $this->hasOne(Video::class);
    }

    public function getTotalVideos()
    {
        return $this->withCount('videos')->get();
    }

}
