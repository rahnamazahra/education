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
            $table->string('avatar')->nullable();
            $table->string('job')->nullable();
            $table->string('role');
            $table->timestamps();
        });
    }

};
