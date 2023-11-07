<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('mobile')->unique()->nullable();
            $table->string('profile_image')->nullable();
            $table->enum('role', ['guest','student', 'teacher'])->default('guest');
            $table->rememberToken();
            $table->timestamps();
        });
    }

};
