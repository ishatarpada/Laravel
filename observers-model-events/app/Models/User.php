<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    protected static function booted(): void
    {
        // static::deleted(function ($user) {
        //     $user->post()->delete();
        // });

        // static::created(function ($user) {

        // });

        // static::updated(function ($user) {
            
        // });
    }
}
