<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CartController extends Controller
{ 
    public function index()
    {    $item_order=ItemOrder::all()->paginate(10);
        return view('item_order.index',compact('item_order'));
    }

   /* public function create()
    {
        return view('item_order.index');
    }*/

  
    public function store(Request $request)
    {    $request->validate([
        'cart_id'=>'required','item_id'=>'required'
    ]);
        $item_order=ItemOrder::create($request->all());
        return redirect()->route('item_order.index');
    }

  
    public function show(ItemOrder $item_order)
    {
        return view('item_order.show',compact('item_order'));
    }

   
    public function edit(ItemOrder $item_order)
    {
        return view('item_order.show',compact('item_order'));
    }

   
    public function update(Request $request, ItemOrder $item_order)
     {    $request->validate([
        'cart_id'=>'required','item_id'=>'required'
    ]);
        $item_order=ItemOrder::update($request->all());
        return redirect()->route('item_order.index');
    }

    public function destroy(ItemOrder $item_order)
    {
        $item_order->delete();
        return redirect()->route('item_order.index');
    }
}