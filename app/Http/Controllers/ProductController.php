<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function getIndex()
    {
    	$products = Product::all();
    	return view('');
    }
    public function getAddToCart{Request $request, $id}{
    	$Product = Product::find($id);
    	$oldCart = \Session::has('cart') ? Session::get('cart') : null;
    	$cart = new cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	//dd($request->session()->get('cart'));
    	// return redirect()->route('product.index');
    }

}
