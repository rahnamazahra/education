<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'name' => $this->name,
            'level' => $this->level,
            'lesson' => $this->total_lessons,
            'students' => $this->total_students,
            'total_rating' => $this->total_rating,
            'image' => $this->image
        ];
    }
}
