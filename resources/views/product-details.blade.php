@extends('layout')

@section('content')

    <div class="main">
        <div class="texte">
            <img src="{{$product->img_url}}" alt="product_image">
            <p>{{$product->name}}</p>
            <p>{{$product->price}} €</p>
            <p>{{$product->weight}} g</p>
            <p>{{$product->discount}} %</p>
        </div>
    </div>
@stop


