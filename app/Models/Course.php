<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "subtitle",
        "level",
        "price",
        "discount",
        "language",
        "description",
        "image",
        "category_id",
        "teacher_id",
    ];
}
