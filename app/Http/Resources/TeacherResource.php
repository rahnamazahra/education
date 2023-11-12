<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "teacher_name"=> $this->name,
            "teacher_avatar"=> $this->avatar,
            "teacher_job"=> $this->job,
        ];
    }
}
