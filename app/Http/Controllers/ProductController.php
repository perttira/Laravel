<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Cart;
use Session;


class ProductController extends Controller
{
    public function getIndex() {
        $products = Product::all();
        return view('/layouts/shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id) {
        $products = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);

        $request->session()->put('cart', $cart);
        /*dd($request->session()->get('cart')); */
        return redirect()->route('product.index');
    }

    public function getCart() {
        if (!Session::has('cart')){
            return view('/layouts/shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // shopping-cart saa viitteenä muuttuja 'products' ja 'totalPrice' joita voi käyttää shopping-cart.blade tiedostossa
        return view('/layouts/shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}
