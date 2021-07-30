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

    protected $table = 'items';
    protected $primaryKey = 'id';

    // 1 to Many
    public function resturant(){
        return $this->belongsTo(Restaurant::class);
    }  
    // Many to Many Relations to store [list of item]
    // items -> carts
    public function cart(){
        return $this->belongsToMany(Cart::class,'cart_item');
    }
    // items -> orders
    public function order(){
        return $this->belongsToMany(Order::class,'order_item');
    }
}
