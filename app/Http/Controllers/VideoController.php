<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Owenoj\LaravelGetId3\GetId3;


class VideoController extends Controller
{

    public function store(Request $request)
    {
        $video = $request->file('video');

        $filename = $video->getClientOriginalName();

        $path = $video->storeAs('public/lessons/videos', $filename);

        $duration = GetId3::fromUploadedFile($request->file('video'))->getPlayTime();

        Video::create([
            'title' => $filename,
            'path' => $path,
            'duration' => $duration,
        ]);
    }
}
