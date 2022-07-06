<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;


class BackofficeController extends Controller

{
    public function index()
    {   
        $products = Product::all();
        $category = Categorie::find(1);
        $products = $category->products;
        return view('backoffice.index',['products' => $products]);
    }

    // public function show(Product $product)
    // {
    //  return view('backoffice.show', ['product' => $product]);
    // }

    // public function create()
    // {   
    //   return view('backoffice.create');
    // }

    // public function store(Request $request)
    // {   
    //   Product::Create($request->all());  
    //  return redirect()->route('/backoffice');
    // }

    public function edit(Product $product)
    {   
    return view('backoffice.edit', ['product'=>$product]);
    }

    public function update(Request $request, Product $product)
    {   
        $verification = $request->validate([
            'name' => 'required|string|max:20',
            'deqcription_main' => 'required|string',
            'url_image' => 'required|string',
            'price' => 'required|integer|min:100',
            'available' => 'required|integer|min:0',
            'quantity' => 'required|integer|min:0',
        ]);
    $product->update($verification);
    $product->save();

    return redirect()->route('backoffice.index');
    }
}
