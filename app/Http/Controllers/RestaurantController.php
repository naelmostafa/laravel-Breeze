<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Item;
use App\Models\Restaurant;
use App\Models\Invoice;

class RestaurantController extends Controller
{
    public function index()
    {
        /* $restaurants=User::all()->paginate(10);*/
        return view('restaurants');
    }


    /* public function create()
    {
        return view('restaurants.index');
    }
    */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 'description' => 'required'
        ]);
        $restaurants = Restaurant::create($request->all());
        return redirect()->route('restaurants.index');
    }


    public function show(Restaurant $restaurants)
    {
        return view('restaurants.show', compact('restaurants'));
    }


    public function showMenu()
    {
        $restaurant = request('restaurantName');

        $stores = Restaurant::where('name', $restaurant)->first('id');
        $items = Item::whereIn('restaurant_id', $stores)->get();
        $invoice = $request->session()->has('invoice') ? session()->get('invoice') : null;

        return view('menu', [
            'restaurantName' => $restaurant,
            'foodItems' => $items,
            'invoice' => $invoice,
        ]);
    }


    public function addToInvoice(Request $request, $id)
    {
        $foodItem = Item::find($id);
        $oldInvoice = $request->session()->has('invoice') ? session()->get('invoice') : null;
        $invoice = new Invoice($oldInvoice);
        $invoice->addItem($foodItem, $foodItem->id);
        $restaurant = Restaurant::where('id', $foodItem->restaurant_id)->first('name');

        $request->session()->put('invoice', $invoice);
        //dd($request->session()->get('invoice'));
        return redirect()->route('menu' , ['restaurantName' => $restaurant -> name]);
    }

    public function removeFromInvoice(Request $request, $id)
    {
        $foodItem = Item::find($id);
        if($request->session()->has('invoice'))
        {
            $invoice = session()->get('invoice');
            $invoice->removeItem($foodItem, $foodItem->id);
            $request->session()->put('invoice', $invoice);
        }

        $restaurant = Restaurant::where('id', $foodItem->restaurant_id)->first('name');
        
        //dd($request->session()->get('invoice'));
        return redirect()->route('menu' , ['restaurantName' => $restaurant -> name]);
    }

    public function invoiceToOrder(Request $request)
    {
        //TODO 
    }


    public function edit(Restaurant $restaurants)
    {
        return view('restaurants.show', compact('restaurants'));
    }


    public function update(Request $request, Restaurant $restaurants)
    {
        $request->validate([
            'name' => 'required', 'description' => 'required'
        ]);
        $restaurants = Restaurant::update($request->all());
        return redirect()->route('restaurants.index');
    }

    public function destroy(Restaurant $restaurants)
    {
        $restaurants->delete();
        return redirect()->route('restaurants.index');
    }
}
