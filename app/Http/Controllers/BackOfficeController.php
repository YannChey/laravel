<?php

namespace App\Http\Controllers;

use App\Models\categorie;
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
        $categorie=categorie::all();
        return view('backofficecreate',['categorie'=>$categorie]);
    }

    public function store(Request $request)
    {
//        $product = new Product();
//
//        $product->name = $request->input('name');
        Product::create(
             [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'weight' => $request->input('weight'),
                'discount' => $request->input('discount'),
                'picture_url' => $request->input('picture_url'),
                'description' => $request->input('description'),
                'quantity' => $request->input('quantity'),
                'category_id' => $request->input('category_id'),

        ]);
        return redirect()->route('products');
    }

    public function show(Product $product) {
        return view('backofficeproductedit',['product' => $product]);
    }

    public function edit(Post $post) { }

    public function update(Request $request, Post $post) { }

    public function destroy(Post $post) { }
}
