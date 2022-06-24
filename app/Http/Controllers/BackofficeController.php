<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {   
        $products = Product::all();
 
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
    // dd($request->all());
    // dd($product);
    $product->update($request->all());
    $product->save();
    return redirect()->route('backoffice.index');
    }
}
