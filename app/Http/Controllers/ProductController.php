<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('product-list');
    }
    public function id (int $id){
        return view('product-details', ['id'=> $id]);
    }
}
