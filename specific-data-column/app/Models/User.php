<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function post()
    {
        return $this->hasMany(Post::class)->select(["title", "description", "user_id"]);
    }
}
