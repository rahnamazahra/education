<?php

namespace App\Models;

use App\Enum\CourseLevelEnum;
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
    protected $casts = [
        'level' => CourseLevelEnum::class
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

    public function totalVotes(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->ratings()->count(),
        );
    }


    public function totalDurations(): Attribute
    {
        $seconds = $this->lessons()->sum('duration')->get();

        return Attribute::make(
            get: fn() => sprintf('%02d:%02d:%02d', ($seconds/ 3600), ($seconds/ 60 % 60), $seconds% 60),
        );
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

    public function scopeSearch($query, $search)
    {
        return $query
            ->where('name', 'like', "%$search%")
            ->orWhere(function ($query) use ($search) {
                $query->whereRelation('teacher', 'name', 'like', "%$search%");
            })
            ->orWhere(function ($query) use ($search) {
                $query->whereRelation('subcategory', 'name', 'like', "%$search%");
            });
    }

    public function scopeSearchByCategory($query, $search)
    {
        return $query->whereHas('category', function ($q) use ($search) {
            $q->where('name', 'like', "%$search%");
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
