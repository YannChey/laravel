<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function backoffice()
    {
        $products = Product::all();
        return view('backoffice', ['products' => $products]);
    }

    public function create()
    {
        return view('new-product');
    }

    public function store(Request $request)
    {

        $request->validate([
            'reference' => 'required|max:100',
            'name' => 'required|max:50',
            'description' => 'required|max:255',
            'price' => 'required|int|min:1',
            'weight' => 'required|int|min:1',
            'img_url' => 'required|max:255',
            'quantity_stock' => 'required|int|min:1',
            'available' => 'required|int|min:0|max:1',
//            'category_id' => 'required|exists:App\Models\category,id',
            'discount' => 'required|int|min:0',
        ]);


        $products = new Product();
        $products->reference = $request ->input('reference');
        $products->name = $request ->input('name');
        $products->description = $request ->input('description');
        $products->price = $request ->input('price');
        $products->weight = $request ->input('weight');
        $products->img_url = $request ->input('img_url');
        $products->quantity_stock = $request ->input('quantity_stock');
        $products->available = $request ->input('available');
        $products->category->id = $request ->input('category_id');
        $products->discount = $request ->input('discount');
        $products-> save();
        return redirect('/backoffice');
    }

    public function edit(Product $product)
    {
        return view('product-edition', ['product' => $product]);
    }
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'reference' => 'required|max:100',
            'name' => 'required|max:50',
            'description' => 'required|max:255',
            'price' => 'required|int|min:1',
            'weight' => 'required|int|min:1',
            'img_url' => 'required|max:255',
            'quantity_stock' => 'required|int|min:1',
            'available' => 'required|int|min:0|max:1',
//            'category_id' => 'required|exists:App\Models\category,id',
            'discount' => 'required|int|min:0',
        ]);


        $products = Product::find($product->id);
        $products->reference = $request ->input('reference');
        $products->name = $request ->input('name');
        $products->description = $request ->input('description');
        $products->price = $request ->input('price');
        $products->weight = $request ->input('weight');
        $products->img_url = $request ->input('img_url');
        $products->quantity_stock = $request ->input('quantity_stock');
        $products->available = $request ->input('available');
        $products->category->id = $request ->input('category_id');
        $products->discount = $request ->input('discount');
        $products->update();
       return redirect('/backoffice');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/backoffice');
    }

}
