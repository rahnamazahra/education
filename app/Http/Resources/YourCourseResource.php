<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class YourCourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "link"=> $this->link,
            "name"=> $this->name,
            "banner"=> $this->banner,
            'level' => $this->level,
            'lesson' => $this->total_lessons,
            'students' => $this->total_students,
            "teacher" => new TeacherResource($this->teacher),
        ];

    }
}
