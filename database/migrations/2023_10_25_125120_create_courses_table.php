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
            $table->string('name');
            $table->string('cover');
            $table->unsignedInteger('capacity');
            $table->string('level');
            $table->boolean('is_featured')->default(false);
            $table->foreignId('subcategory_id')->constrained();
            $table->foreignId('teacher_id')->constrained();
            $table->timestamps();
        });
    }

};
