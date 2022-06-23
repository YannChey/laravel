<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'weight',
        'discount',
        'picture_url',
        'description',
        'quantity',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(Categorie::class);
    }
}
