<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
