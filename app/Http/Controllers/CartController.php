<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
    	$cart = session()->has('cart') == true ? session('cart') : [];
    	$totalPrice = 0;
    	    	
    	return view('frontend.cart', compact('cart', 'totalPrice'));
    }

    public function removeCart()
    {
    	session()->forget('cart');
    }

    public function updateCart(Request $request)
    {
    	$data =$request->all();
    	
    	$cart = session()->has('cart') == true ? session('cart') : [];

    	foreach ($cart as $key => $value) {
    		$request->validate(
    			[
    				"quantity_".$value['id'] => "numeric|min:1|max:9",
    			]);
    		//kiem tra id san pham có trong gio hang thi bat dau gan quantity cua product do cho product do
    		if($data['product_'.$value['id']] == $value['id']) {
    			$value['quantity'] = $data['quantity_'.$value['id']];
    			$cart[$key]['quantity'] = $data['quantity_'.$value['id']];
    		}
    	}
	    session(['cart' => $cart]);

	    return redirect(route('view.cart'));
    }
}
