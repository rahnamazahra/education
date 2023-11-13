<?php

namespace App\Http\Resources;

use App\Http\Resources\ChapterResource;
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
            'level' => $this->level,
            'price' => $this->price,
            'discount' => $this->discount,
            'discount_calculation' => $this->discount_calculation,
            'language' => $this->language,
            'banner' => url($this->banner),
            'total_chapters' => $this->total_chapters,
            'total_students' => $this->total_students,
            'total_rating' => $this->total_ratings,
            'total_lesson' => $this->total_lessons,
            'teacher_name' => $this->teacher->name,
            'teacher_avatar' => $this->teacher->avatar,
            'total_votes' => $this->total_votes,
            'description' => $this->description,
            'chapters' =>  ChapterResource::collection($this->chapters),
            'comments'  => CommentResource::collection($this->ratings),
        ];

    }
}


