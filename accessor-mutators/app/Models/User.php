<?php

namespace App\Models;

use Attribute;
// use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Number;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    /* Mutators */

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /* public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    } */


    /* ------------------------------------------------------------ */

    /* Accessors */

    public function getDateAttribute($value)
    {
        return date("Y M d", strtotime($value));
    }

    // public function getNameAttribute($value)
    // {
    //     return ucwords($value);
    // }

    public function getSalaryAttribute($value)
    {
        // return Number::currency($value);
        return Number::spell($value);
    }

    protected function Name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucwords($value),
            set: fn (string $value) => strtolower($value),
        );
    }
}
