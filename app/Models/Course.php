<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

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
        "banner",
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

    public function chapters(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }

    public function lessons(): HasManyThrough
    {
        return $this->hasManyThrough(Lesson::class, Chapter::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'subcategory_id');
    }

    public function totalRatings(): Attribute
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

    public function totalChapters(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->chapters()->count(),
        );
    }

    public function totalStudents(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->students()->count(),
        );
    }

    public function totalVotes():Attribute
    {
        return Attribute::make(
            get: fn() => $this->ratings()->count(),
        );
    }

    public function totalVideos():Attribute
    {
        return Attribute::make(function () {
            return $this->chapters->sum(function ($chapter) {
                return $chapter->lessons->sum(fn ($lesson) => $lesson->count());
            });
        });
    }

    public function totalDurations()
    {
        $lessons = $this->lessons()->with('video')->get();

        $seconds = $lessons->sum('video.duration');

        return sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
    }

    public function getLinkAttribute()
    {
        return route('course.view', $this);
    }

    public function discountCalculation(): Attribute
    {
        return Attribute::make(
            get: fn() => number_format($this->price - ($this->price * ($this->discount / 100))),
        );
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

    public static function scopeTopCourses($query)
    {
        return $query
        ->whereHas('ratings', function ($query) {
            $query->where('rating', 5);
        })
        ->get();
    }



}
