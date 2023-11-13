<?php

namespace App\Http\Resources;

use App\Http\Resources\VideoResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class LessonResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'link' => Storage::disk('public')->url($this->path),
            'duration' => $this->duration,
        ];
    }
}
