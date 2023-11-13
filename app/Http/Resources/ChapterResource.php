<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChapterResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'lessons' => LessonResource::collection('lessons'),
            'total_durations' => $this->total_durations,
            'total_lesson' => $this->total_lessons,
        ];
    }
}
