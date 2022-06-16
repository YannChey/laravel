<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function backoffice(){
        $products=Product::all();
        return view('backoffice',['products' => $products]);
    }
    public function backofficeproduct(){
        return view('backofficeproduct');
    }
//    public function backofficeproductedit(Product $product){
//        return view('backofficeproductedit',['product' => $product]);
//    }

    public function index() { }

    public function create() {
        $products=Product::all();
        return view('backofficecreate',['products'=>$products]);
    }

    public function store(Request $request) { }

    public function show(Product $product) {
        return view('backofficeproductedit',['product' => $product]);
    }

    public function edit(Post $post) { }

    public function update(Request $request, Post $post) { }

    public function destroy(Post $post) { }
}
