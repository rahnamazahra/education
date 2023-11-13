<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = [
       "name",
        "slug",
        "course_id"
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function totalVideos(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->lessons()->count(),
        );
    }

    public function totalDuration(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->lessons()->sum('duration'),
        );
    }


}
