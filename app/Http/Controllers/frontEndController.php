<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class frontEndController extends Controller
{
    //
    public function search(){
        $this->validate(request(), [
            'q' => ['required']
        ]);

        $post = Product::where('title','LIKE','%'.request()->q.'%');

        return view('frontend.search')->with('posts', $post->paginate(20));
    }

    //
    public function preview($slug){
        $product = Product::where('slug',$slug)->first();

        return view('frontend.preview')->with('product', $product);
    }
}
