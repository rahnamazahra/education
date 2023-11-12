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
            'name' => $this->name,
            'link' => $this->path,
            'duration' => $this->duration,
        ];
    }
}
