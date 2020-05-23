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

Route::get('/home', function () {
    return view('home');
});

Route::get('/orders', function () {
    return view('orders');
});

// fetch Item from DB
Route::get('pizza', function () {
    return App\pizza::all();
});

// Add to cart 
Route::post('add', 'cartController@add');

// Display item from  cart
Route::get('cart', function() {
	return Cart::getContent();
});

// Clear Items
Route::get('clear', function() {
	$clearItems = Cart::clear();
	if($clearItems)
		return Cart::getContent();
});

// get totals price
Route::get('total', function() {	
	$total = Cart::getTotal();    	
    return $total;
});

// get quantity 
Route::get('quantity', function() {	
	$cartTotalQuantity = Cart::getTotalQuantity();
    return $cartTotalQuantity;   
});


