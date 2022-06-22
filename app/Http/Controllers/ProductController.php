<?php

namespace App\Http\Controllers;

use App\Models\Product;


class ProductController extends Controller
{

    public function products()
    {
//        $products = \DB::select('SELECT * FROM products');
        $products = Product::all();

//        dd($products);

        return view('product-list',['products' => $products]);
    }

    public function id(Product $product)
    {

//        $product_details = \DB::select('SELECT * FROM products WHERE id = ?', [$id]);
//        $product_details = Product::find($id);

        return view('product-details', ['product' => $product]);
    }

    public function productsPriceSort()
    {
        $products = Product::all('products')
            ->orderBy('price')
            ->get();


//        dd($products);

        return view('product-list',['products' => $products]);
    }
}
