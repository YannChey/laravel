<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
//    private array $products =
//        [
//            "1" => [
//                "name" => "Jouet Banane",
//                "price" => 104555,
//                "weight" => 400,
//                "discount" => 10,
//                "picture_url" => "https://img.fruugo.com/product/9/02/201028029_max.jpg",
//                "description" => "Pour ceux qui aime les bananes ! Usage multiple"
//            ],
//            "2" => [
//                "name" => "Tamarin",
//                "price" => 205500,
//                "weight" => 600,
//                "discount" => 20,
//                "picture_url" => "https://cdn.futura-sciences.com/buildsv6/images/mediumoriginal/1/4/f/14f5c9b660_30049_12138-saguinus-imperatorjpg.jpg",
//                "description" => "Tamarin de qualité, importé directement du Pérou"
//            ],
//            "3" => [
//                "name" => "Bananes",
//                "price" => 506700,
//                "weight" => 2500,
//                "discount" => 20,
//                "picture_url" => "https://labanane.info/wp-content/uploads/cavendish.jpg"
//            ],
//        ];

    public function products(Request $request)
    {
        $products=Product::all();
        if($request->has('sort')){
            $products=$products->sortBy($request->input('sort'));
        }
        return view('product-list',['products' => $products]);
    }

//    public function productsSortByName()
//    {
////        $products=Product::orderBy('name')->get();
//        $products=Product::all()->sortBy('name');
//        return view('product-list',['products' => $products]);
//    }
//
//    public function productsSortByPrice()
//    {
//        $products=Product::all()->sortBy('price');
//        return view('product-list',['products' => $products]);
//    }

    public function show(Product $product)
    {
            return view('product-details', ['product' => $product]);
    }

}
