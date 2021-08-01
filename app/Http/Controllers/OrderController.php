<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CartController extends Controller
{ 
    public function index()
    {    $orders=Order::all()->paginate(10);
        return view('orders.index',compact('orders'));
    }

   /* public function create()
    {
        return view('orders.index');
    }*/

  
    public function store(Request $request)
    {    $request->validate([
        'user_id'=>'required'
    ]);
        $orders=Order::create($request->all());
        return redirect()->route('orders.index');
    }

  
    public function show(Order $orders)
    {
        return view('orders.show',compact('orders'));
    }

   
    public function edit(Order $orders)
    {
        return view('orders.show',compact('orders'));
    }

   
    public function update(Request $request, Order $orders)
     {    $request->validate([
        'user_id'=>'required'
    ]);
        $orders=Order::update($request->all());
        return redirect()->route('orders.index');
    }

    public function destroy(Order $orders)
    {
        $orders->delete();
        return redirect()->route('orders.index');
    }
}
