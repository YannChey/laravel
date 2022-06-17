<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function backoffice()
    {
        $products = Product::all();
//        $category=categorie::find(1);
//        dd($category->products);
//        dd($products->first()->category);
        return view('backoffice', ['products' => $products]);
    }

    public function backofficeproduct()
    {
        return view('backofficeproduct');
    }
//    public function backofficeproductedit(Product $product){
//        return view('backofficeproductedit',['product' => $product]);
//    }

    public function index()
    {
    }

    public function create()
    {
        $categorie = categorie::all();
        return view('backofficecreate', ['categorie' => $categorie]);
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

    public function show(Product $product)
    {
//        return view('backofficeedit', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        $categorie = Categorie::all();
        return view('backofficeedit',['product'=>$product,'categorie'=>$categorie]);
    }

    public function update(Request $request, Product $product)
    {

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->discount = $request->input('discount');
        $product->picture_url = $request->input('picture_url');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');

        $product->save();

        return redirect()->route('products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products')
            ->with('success','Product deleted successfully');
    }
}
