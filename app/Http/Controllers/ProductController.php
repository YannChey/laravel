<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\price;
use App\Models\name;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{

    public function products(Request $request)
    {

        // $products = Products::all();
        
        $products = DB::select('SELECT * FROM products');
        // @dd($products);
        
        return view('product-list',['products' => $products]);
    }

    public function priceOrder()
    {
        // $price = Products::all();
        $price = Products::select()->orderBy('price')->get();
        // $products = \DB::select('SELECT * FROM products');
        // @dd($products);
        
        return view('product-orderBy-price',['products' => $price]);
    }


    public function nameOrder()
    {

        $name = Products::select()->orderBy('name')->get();
        // $products = \DB::select('SELECT * FROM products');
        // @dd($products);
        
        return view('product-orderBy-name',['products' => $name]);
    }

    public function id($id)
    {
        $product_detail = \DB::select('SELECT * FROM products WHERE idproducts = :id', ['id' => $id]);
        // @dd($product_detail);
        return view('product-details', ['product'=>$product_detail[0]]);
        // return view('product-details', ['product' => $products[$key]]);
        
    }
}
