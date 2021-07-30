<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class);
    }

    // Many to Many Relations to store [list of item]
    // orders -> items
    public function item(){
        return $this->belongsToMany(Item::class,'order_item');
    }
}
