<?php

namespace App\Http\Resources;

use App\Http\Resources\VideoResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'name' => $this->name,
            'total_videos' => $this->total_videos,
            'total_duration_videos' => $this->duration_videos,
            'videos' => VideoResource::collection($this->videos),
        ];
    }
}
