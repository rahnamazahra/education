<?php

namespace App\Http\Resources;

use App\Http\Resources\ChapterResource;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CourseDetailsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'name' => $this->name,
            'level' => $this->level->title(),
            'price' => $this->price,
            'discount' => $this->discount,
            'discount_calculation' => $this->discount_calculation,
            'language' => $this->language,
            'banner' => Storage::disk('public')->url($this->banner),
            'total_chapters' => $this->total_chapters,
            'total_students' => $this->total_students,
            'total_ratings' => $this->total_ratings,
            'total_lessons' => $this->total_lessons,
            'total_votes' => $this->total_votes,
            'total_durations' => $this->total_durations,
            'teacher' => new UserResource($this->teacher),
            'description' => $this->description,
            'chapters' =>  ChapterResource::collection($this->chapters),
            'comments'  => CommentResource::collection($this->ratings),
        ];

    }
}


