<?php

namespace App\Models;

use App\Enum\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'mobile',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'mobile',
        'role',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'role' => UserRoleEnum::class
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    
    public function ratings()
    {
        return $this->hasMany(rating::class);
    }
}
