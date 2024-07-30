<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $with = ["user"];

    public function user()
    {
        return $this->belongsTo(User::class)->select(["name", "email", "id"]);
    }
}
