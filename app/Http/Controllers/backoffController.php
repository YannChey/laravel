<?php

namespace App\Http\Controllers;
use App\Http\Controllers\backoffController;
use App\Models\Products;

class backofficeClass extends Controller
{
    public function backoffice()
    {
        $products = Products::all();
 
        return view('product-list',['products' => $products]);
    }
}
