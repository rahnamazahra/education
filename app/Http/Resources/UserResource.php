<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "name"=> $this->name,
            "avatar"=> Storage::disk('public')->url($this->avatar),
            "job"=> $this->job,
        ];

    }
}
