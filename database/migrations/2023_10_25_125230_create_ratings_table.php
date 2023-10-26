<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating');
            $table->text('comment')->nullable();
            $table->boolean('is_testimonial')->default(false);
            $table->foreignId('course_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->unique(['user_id', 'course_id']);
            $table->timestamps();
        });
    }

};
