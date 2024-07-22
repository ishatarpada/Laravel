<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contacts;

class Student extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $guarded = [];
    


    public function contact(){
        return $this->hasOne(Contacts::class);
    }

}
