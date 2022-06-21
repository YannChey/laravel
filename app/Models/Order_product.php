<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasOne(Product::class,'products_id');
    }
    public function orders()
    {
        return $this->hasOne(Order::class,'orders_id');
    }
}
