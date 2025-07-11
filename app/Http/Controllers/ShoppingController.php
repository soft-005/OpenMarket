<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Session;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class ShoppingController extends Controller
{
    //
    public function store($slug,$qty){

        $product = Product::where('slug',$slug)->first();

       $p = Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'qty' => $qty,
            'price' => $product->price,
        ]);

        Cart::associate($p->rowId, 'App\Models\Product');
        
        Session::flash('success', 'Success Added to cart!');

        return redirect()->back();
    }

    //
    public function remove($id){
        Cart::remove($id);

        return redirect()->back();
    }

    //
    public function empty(){
        Cart::destroy();
        return redirect()->back();
    }

    //
    public function index(){        
        return view('frontend.cart')->with(['carts' => Cart::content()]);
    }


    //
    public function checkout(){
        return view('frontend.checkout');
    }

}
