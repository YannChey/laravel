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

    public function id(int$id)
    {
        $product_details = \DB::select('SELECT * FROM products WHERE id = ?', [$id]);
        return view('product-details', ['product' => $product_details[0]]);
    }
}
