<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Restaurant;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\ItemOrder;
use App\Models\User;
use App\Models\Cart;
use App\Models\CartItem;

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

    public function dashboard()
    {
        $currUser =  Auth::user();
        $orders = Order::all();
        $orderItems = ItemOrder::all();
        $users = User::all();
        $foodItems = Item::all();
        return view('dashboard', [
            'orders' => $orders,
            'orderItems' => $orderItems,
            'users' => $users,
            'foodItems' => $foodItems,
            'currUser' => $currUser,
        ]);
    }

    public function removeOrder($id)
    {
        $order = Order::find($id)->first();
        $cart = new Cart();
        $cart->order_id = $id;
        $cart->user_id = $order->user_id;
        $cart->save(); // moved order from orders db to carts db
        
        $orderItems = ItemOrder::where('order_id' , $id)->get();


        foreach ($orderItems as &$item) {

            $cartItem = new CartItem();
            $cartItem->cart_id = $item->order_id;
            $cartItem->item_id = $item->item_id;
            $cartItem->save();
        }

        ItemOrder::where('order_id' , $id)->delete();
        Order::find($id)->delete(); 
        return redirect()->route('dashboard');

    }

    public function showMenu(Request $request)
    {
        $restaurant = request('restaurantName');

        $stores = Restaurant::where('name', $restaurant)->first('id');
        $items = Item::whereIn('restaurant_id', $stores)->get();
        $invoice = $request->session()->has('invoice') ? session()->get('invoice') : new Invoice(null);

        return view('menu', [
            'restaurantName' => $restaurant,
            'foodItems' => $items,
            'items' => $invoice->items,
            'totalQty' => $invoice->totalQty,
            'totalPrice' => $invoice->totalPrice,
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
        return redirect()->route('menu', ['restaurantName' => $restaurant->name]);
    }

    public function removeFromInvoice(Request $request, $id)
    {
        $foodItem = Item::find($id);
        if ($request->session()->has('invoice')) {
            $invoice = session()->get('invoice');
            $invoice->removeItem($foodItem, $foodItem->id);
            $request->session()->put('invoice', $invoice);
        }

        $restaurant = Restaurant::where('id', $foodItem->restaurant_id)->first('name');

        //dd($request->session()->get('invoice'));
        return redirect()->route('menu', ['restaurantName' => $restaurant->name]);
    }

    public function invoiceToOrder(Request $request)
    {
        if ($request->session()->has('invoice')) {
            $invoice = session()->get('invoice');
            if($invoice->totalQty > 0){
                $order = new Order();
                $user = Auth::user();

                $order->user_id = $user['id'];
                $order->save();

                $items = $invoice->items;

                foreach ($items as &$item) {
                    while ($item['qty'] > 0) {
                        $orderItems = new ItemOrder();
                        $orderItems->order_id = $order->id;
                        $orderItems->item_id = $item['item']['id'];
                        $orderItems->save();
                        $item['qty']--;
                    }
                }

                    $invoice = new Invoice(null);
                    $request->session()->put('invoice', $invoice);
            }   
        }
        return redirect()->route('dashboard');
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
