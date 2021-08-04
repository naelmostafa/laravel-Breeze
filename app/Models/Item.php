<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
    
    public function resturant(){
        return $this->belongsTo(Resturant::class);
    }
    public function cart(){
        return $this->belongsToMany(Cart::class);
    }
    public function order(){
        return $this->belongsToMany(Order::class);
    }
}