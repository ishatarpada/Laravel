<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function latestOrder(){
        return $this->hasOne(Order::class)->latestOfMany();
    }

    public function oldestOrder(){
        return $this->hasOne(Order::class)->oldestOfMany();
    }

    public function largestOrder(){
        return $this->hasOne(Order::class)->ofMany("amount" , "max");
    }

    public function smallestOrder(){
        return $this->hasOne(Order::class)->ofMany("amount" , "min");
    }

    public function smallestOrderDate(){
        return $this->hasOne(Order::class)
                    ->ofMany('amount', 'min')
                    ->whereDate('created_at', '2024-07-23');
    }

    public function largestOrderDate(){
        return $this->hasOne(Order::class)
                    ->ofMany('amount', 'max')
                    ->whereDate('created_at', '2024-07-23');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
    
}
