<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;


class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all()->paginate(10);
        return view('restaurants.index', compact('restaurants'));
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
