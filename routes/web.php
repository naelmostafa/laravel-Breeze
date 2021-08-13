<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/add-to-invoice/{id}' , [
    'uses' => 'RestaurantController@addToInvoice',
    'as' => 'FoodAddToInvoice'
]);

Route::get('/remove-from-invoice/{id}' , [
    'uses' => 'RestaurantController@removeFromInvoice',
    'as' => 'FoodRemoveFromInvoice'
]);


Route::get('/menu','RestaurantController@showMenu')->middleware(['auth'])->name('menu');
Route::get('/restaurants', 'RestaurantController@index')->middleware(['auth'])->name('restaurants');


require __DIR__ . '/auth.php';
