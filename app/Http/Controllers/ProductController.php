<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function products(Request $request)
    {
//        $products = \DB::select('SELECT * FROM products');
        $products = Product::all();
if ($request -> has ('sort')){
    $products = $products ->sortBy ($request -> input('sort'));
}



        return view('product-list',['products' => $products]);
    }

    public function id(Product $product)
    {

//        $product_details = \DB::select('SELECT * FROM products WHERE id = ?', [$id]);
//        $product_details = Product::find($id);

        return view('product-details', ['product' => $product]);
    }


}
