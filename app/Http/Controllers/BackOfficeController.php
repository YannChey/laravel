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
        return view('new_product');
    }

    public function store(Request $request)
    {
        $products = new Product();
        $products->name = $request ->input('name');
        $products->name = $request ->input('name');
        $products->name = $request ->input('name');
        $products->name = $request ->input('name');
        $products->name = $request ->input('name');
        $products->name = $request ->input('name');
        $products-> save();
        return redirect('/backoffice');
    }

    public function edit($id)
    {
        return view('product-edition', ['id' => $id]);
    }
    public function update(Request $request, $id)
    {

       return redirect('/backoffice');
    }

}
