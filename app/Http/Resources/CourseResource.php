<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'link' => $this->link,
            'slug' => $this->slug,
            'name' => $this->name,
            'level' => $this->level,
            'total_lesson' => $this->total_lessons,
            'total_students' => $this->total_students,
            'total_rating' => $this->total_ratings,
            'banner' => url($this->banner),
            'teacher' => new UserResource($this->whenLoaded('teacher')),
        ];
    }
}
