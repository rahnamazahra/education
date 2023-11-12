<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            //'category_id' => $this->category->id,
           // 'subcategory_id' => $this->subcategory_id,
            'link' => $this->link,
            'slug' => $this->slug,
            'name' => $this->name,
            'level' => $this->level,
            'lesson' => $this->total_lessons,
            'students' => $this->total_students,
            'rating' => $this->total_ratings,
            'banner' => $this->banner
        ];
    }
}
