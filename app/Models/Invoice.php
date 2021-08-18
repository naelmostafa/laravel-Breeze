<?php

namespace App\Models;

Class invoice
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    /*public static function lol($oldCart)
    {
        $instance = new self();
        if ($oldCart)
        {
            $instance->items = $oldCart->items;
            $instance->totalQty = $oldCart->totalQty;
            $instance->totalPrice = $oldCart->totalPrice;
        }
        return $instance;
    }*/

    public function addItem($item , $id)
    {
        $storedItem = ['qty' => 0 , 'price'=> $item -> price , 'item'=> $item ];
        if($this -> items)
        {
            if (array_key_exists($id , $this->items ))
            {
                $storedItem = $this->items[$id] ; 
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function removeItem($item , $id)
    {
        if( $this -> items && array_key_exists($id , $this->items) )
        {
            $storedItem = $this->items[$id];

            if ( $storedItem )
            {
                if($storedItem['qty'] < 1) 
                {
                    $this->items[$id]['item'] = null;
                    $this->items[$id]['qty'] = 0;
                    $this->items[$id]['price'] = 0;
                }
                else
                {
                    $storedItem['qty']--;
                    $storedItem['price'] -= $item -> price;
                    $this->items[$id] = $storedItem;
                }
                
                $this->totalQty--;
                $this->totalPrice -= $item->price;
            }
        }

    }
}