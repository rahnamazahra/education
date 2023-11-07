<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
    ];

    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }

    public static function scopeSearch($query, $search)
    {
        return Subcategory::query()
            ->whereHas('category', fn ($q) => $q->where('slug', $search))
            ->get();
    }
}
