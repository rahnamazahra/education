<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "level",
        "price",
        "discount",
        "language",
        "description",
        "image",
        "teacher_id",
        "subcategory_id"
    ];


    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public static function scopeSearch($query, $search)
    {
        return $query
            ->where('name', 'like', "%$search%")
            ->orWhere('category.name', 'like', "%$search%")
            ->orWhereHas('lessons', function ($q) use ($search) {
                return $q->where('lessons.name', 'like', "%$search%");
            });
    }

    public function totalRating(): Attribute
    {
        return Attribute::make(
            get: fn() => ceil($this->ratings()->avg('rating')),
        );
    }

    public function totalLessons(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->lessons()->count(),
        );
    }

    public function totalStudents(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->students()->count(),
        );
    }

    public function totalDurations()
    {
        $lessons = $this->lessons()->with('video')->get();

        $seconds = $lessons->sum('video.duration');

        return sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
    }

}
