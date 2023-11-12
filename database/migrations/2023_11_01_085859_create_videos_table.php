<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('duration');
            $table->text('path');
            $table->foreignId('course_id')->constrained();
            $table->foreignId('chapter_id')->constrained();
            $table->foreignId('lesson_id')->constrained();
            $table->timestamps();
        });
    }
};
