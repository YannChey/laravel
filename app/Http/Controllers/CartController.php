<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function nothing(){
        return view('homepage');
    }

    public function cart(Product $product, Request $request){
        $product->wanted_quantity = $request->input('wanted_quantity');
        $product->save();
        return view('cart',['product'=>$product]);
    }
}
