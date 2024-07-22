<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'name',
        'email',
    ];

    protected $guarded = [];

    public function post(){
        return $this->hasMany(Post::class);
        // return $this->hasMany(Post::class , 'user_id' , 'id');
    }
}
