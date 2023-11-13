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
            'lessons' => LessonResource::collection($this->whenLoaded('lessons')),
            'total_duration' => $this->total_duration,
            'total_video' => $this->total_videos,
        ];
    }
}
