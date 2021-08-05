<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CartController extends Controller
{ 
    public function index()
    {    
        $carts=Cart::all()->paginate(10);
        return view('carts.index',compact('carts'));
    }

   /* public function create()
    {
        return view('carts.index');
    }*/

  
    public function store(Request $request)
    {    $request->validate([
        'user_id'=>'required'
    ]);
        $carts=Cart::create($request->all());
        return redirect()->route('carts.index');
    }

  
    public function show(Cart $carts)
    {
        return view('carts.show',compact('carts'));
    }

   
    public function edit(Cart $carts)
    {
        return view('carts.show',compact('carts'));
    }

   
    public function update(Request $request, Cart $carts)
     {    $request->validate([
        'user_id'=>'required'
    ]);
        $carts=Cart::update($request->all());
        return redirect()->route('carts.index');
    }

    public function destroy(Cart $carts)
    {
        $carts->delete();
        return redirect()->route('carts.index');
    }
}
