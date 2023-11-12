<?php

namespace App\Http\Resources;

use App\Http\Resources\LessonResource;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseDetailsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'name' => $this->name,
            'banner' => $this->banner,
            'level' => $this->level,
            'price' => $this->price,
            'discount' => $this->discount,
            'discount_calculation' => $this->discount_calculation,
            'language' => $this->language,
            'total_lesson' => $this->total_lessons,
            'total_students' => $this->total_students,
            'total_rating' => $this->total_ratings,
            'total_videos' => $this->total_videos,
            'teacher_name' => $this->teacher->name,
            'teacher_avatar' => $this->teacher->avatar,
            'total_votes' => $this->total_votes,
            'description' => $this->description,
            'lessons' =>  LessonResource::collection($this->lessons),
            'comments'  => CommentResource::collection($this->ratings),
        ];

    }
}


