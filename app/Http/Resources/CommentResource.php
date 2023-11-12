<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "rating" => $this->rating,
            "name" => $this->user->name,
            "avatar" => $this->user->avatar,
            "comment" => $this->comment,
            "date" => $this->created_at->diffForHumans()

        ];
    }
}
