<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "slug",
        "chapter_id"
    ];

    public function chapter(): BelongsTo
    {
        return $this->belongsTo(Chapter::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function totalVideos():Attribute
    {
        return Attribute::make(
            get: fn() => $this->videos->count(),
        );
    }

    public function durationVideos():Attribute
    {
        return Attribute::make(
            get: fn() => $this->videos->count(),
        );
    }

}
