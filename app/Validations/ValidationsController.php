<?php

namespace App\Validations;

//use App\Validations\TestChild;
//use App\Models\Product;


class ValidationsController
{
    public function show()
    {
        $text = new TestChild('machin', 595, 12, 'vert');
        return view('validations', ['text' => $text]);
    }
}
