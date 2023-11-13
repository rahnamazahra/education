<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class YourCourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $yourCourses = CourseResource::collection($this->courses);
        return $yourCourses->merge(['teacher' => new TeacherResource($this->teacher)]);

    }
}
