<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        $products = Product::all();
//        $category=categorie::find(1);
        return view('backoffice.backoffice', ['products' => $products]);
    }

    public function create()
    {
        $categorie = Categorie::all();
        return view('backoffice.backoffice-create', ['categorie' => $categorie]);
    }

    public function store(Request $request)
    {
//        $product = new Product();
//
//        $product->name = $request->input('name');
        $request->validate([
            'name'=>'bail|required|alpha',
            'price'=>'bail|int|required|min:0',
            'weight'=>'bail|int|min:0',
            'discount'=>'bail|int|min:0',
            'quantity'=>'bail|int|required|min:1',
            'picture_url'=>'bail|alpha',
        ]);
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
        return view('backoffice.backoffice-edit',['product'=>$product,'categorie'=>$categorie]);
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

    public function showcategories(){
//        $products=Product::all();
        $categories=Categorie::all();
//        $products=Product::all()->sortBy($categories);
        return view('backoffice.listing-products-by-categories',['categories'=>$categories]);
    }
}
