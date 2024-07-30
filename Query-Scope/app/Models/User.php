<?php

namespace App\Models;

use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ScopedBy([UserScope::class])]

class User extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    /* LOCAL SCOPE */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /* public function scopeCity($query , $cityName){
        return $query->where('city' ,$cityName);
    } */


    public function scopeCity($query, $cityName)
    {
        return $query->whereIn('city', $cityName);
    }

    public function scopeSort($query)
    {
        return $query->orderBy('name', 'asc');
    }

    /* GLOBAL SCOPE METHOD 1*/


    /* protected static function booted():void
    {
        static::addGlobalScope('userDetail' , function(Builder $builder){
            $builder->where('status' , 1);
        });

        static::addGlobalScope(new UserScope);
    } */


    /* REMOVE GLOBAL SCOPE 
    User::withoutScope('userDetail')->get(); */
}
