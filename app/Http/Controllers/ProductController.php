<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function products()
    {
        $products = \DB::select('SELECT * FROM products');
//        dd($products);

        return view('product-list',['products' => $products]);
    }

    public function id(int $key)
    {
        return view('product-details', ['product' => $this->products[$key]]);
    }
}
