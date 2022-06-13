<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private array $products =
        [
            "jouet" => [
                "name" => "Jouet Banane",
                "price" => 104555,
                "weight" => 400,
                "discount" => 10,
                "picture_url" => "https://img.fruugo.com/product/9/02/201028029_max.jpg"
            ],
            "tamarin" => [
                "name" => "Tamarin",
                "price" => 205500,
                "weight" => 600,
                "discount" => 20,
                "picture_url" => "https://cdn.futura-sciences.com/buildsv6/images/mediumoriginal/1/4/f/14f5c9b660_30049_12138-saguinus-imperatorjpg.jpg"
            ],
            "bananes" => [
                "name" => "Bananes",
                "price" => 506700,
                "weight" => 2500,
                "discount" => 20,
                "picture_url" => "https://labanane.info/wp-content/uploads/cavendish.jpg"
            ],
        ];

    public function products()
    {
        return view('product-list',['products' => $this->products]);
    }

    public function id(int $id)
    {
        return view('product-details', ['products' => $this->products]);
    }
}
