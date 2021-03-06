<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartItemController extends Controller
{
    public function index()
    {
        $cart_item = CartItem::all()->paginate(10);
        return view('cart_item.index', compact('cart_item'));
    }

    /* public function create()
    {
        return view('cart_item.index');
    }*/


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required', 'item_id' => 'required'
        ]);
        $cart_item = CartItem::create($request->all());
        return redirect()->route('cart_item.index');
    }


    public function show(CartItem $cart_item)
    {
        return view('cart_item.show', compact('cart_item'));
    }


    public function edit(CartItem $cart_item)
    {
        return view('cart_item.show', compact('cart_item'));
    }


    public function update(Request $request, CartItem $cart_item)
    {
        $request->validate([
            'user_id' => 'required', 'item_id' => 'required'
        ]);
        $cart_item = CartItem::update($request->all());
        return redirect()->route('cart_item.index');
    }

    public function destroy(CartItem $cart_item)
    {
        $cart_item->delete();
        return redirect()->route('cart_item.index');
    }
}
