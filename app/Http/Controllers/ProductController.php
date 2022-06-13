<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private array $products =
        [
            "iphone" => [
                "name" => "iPhone 13",
                "price" => 104555,
                "weight" => 400,
                "discount" => 10,
                "picture_url" => "https://m.media-amazon.com/images/I/71hIfcIPyxS._AC_SX522_.jpg"
            ],
            "ipad" => [
                "name" => "iPad",
                "price" => 205500,
                "weight" => 600,
                "discount" => 20,
                "picture_url" => "https://cdn-files.kimovil.com/default/0005/17/thumb_416445_default_big.jpeg"
            ],
            "imac" => [
                "name" => "iMac",
                "price" => 506700,
                "weight" => 2500,
                "discount" => 20,
                "picture_url" => "https://image.darty.com/informatique/macbook_imac_ipad/imac/apple_newimac27_i5_8go_512_s2008254789180A_162217260.jpg"
            ],
        ];

    public function products()
    {
        return view('product-list',['products' => $this->products]);
    }

    public function id(int $id)
    {
        return view('product-details', ['id' => $id]);
    }
}
