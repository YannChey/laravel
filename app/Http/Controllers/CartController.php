<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function nothing()
    {
        return view('homepage');
    }

    public function cart(Product $product, Request $request)
    {
//        $product->wanted_quantity = $request->input('wanted_quantity');
//        $product->save();
        $request->validate([
            'wanted_quantity'=>'bail|int|required|min:1',
        ]);
        $request->input('wanted_quantity');
        return view('cart', ['product'=>$product,'request'=>$request]);
    }

    public function getCart(Request $request)
    {
        Order::create(
            [
                'number'=>uniqid(),
                'total'=>$request->input('priceTTC')
            ]
        );

        return view('confirm');
    }
}
