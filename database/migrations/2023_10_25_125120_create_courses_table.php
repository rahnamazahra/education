<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->text('subtitle');
            $table->string('level');
            $table->unsignedBigInteger('price');
            $table->unsignedInteger('discount');
            $table->string('language');
            $table->longText('description')->nullable();
            $table->text('image');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('teacher_id')->constrained('users');
            $table->timestamps();
        });
    }

};
