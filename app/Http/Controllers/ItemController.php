<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ItemController extends Controller
{ 
    public function index()
    {    $items=Item::all()->paginate(10);
        return view('items.index',compact('items'));
    }

    public function create()
    {
        return view('items.index');
    }

    public function store(Request $request)
    {    $request->validate([
       'name'=>'required','description'=>'required','price'=>'required','restaurant_id'=>'required'
    ]);
        $items=Item::create($request->all());
        return redirect()->route('items.index');
    }

    
    public function show(Item $items)
    {
        return view('items.show',compact('items'));
    }

    
    public function edit(Item $item)
    {
        return view('item.show',compact('item'));
    }

    public function update(Request $request, Item $item)
     {    $request->validate([
        'name'=>'required','description'=>'required','price'=>'required','restaurant_id'=>'required'
    ]);
        $item=Item::update($request->all());
        return redirect()->route('item.index');
    }


    public function destroy(Item $item)
    {
        $users->delete();
        return redirect()->route('item.index');
    }
}
