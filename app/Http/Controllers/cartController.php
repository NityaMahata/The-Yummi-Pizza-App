<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\pizza;

class cartController extends Controller
{
   public function add(Request $res){
   	   	$qty =  $res->qty; 
   	   	$id = $res->id;
   	   	$data = pizza::find($id);
   	      	   	
	   	$add = Cart::add([  
			'id' => $id,
			'name' => $data->name,
			'price' => $data->price,
			'quantity' => $qty,
			'attributes' => []
		]);
		if($add)
			return "Order added to cart";
    } 

}
