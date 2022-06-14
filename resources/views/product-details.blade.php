@extends('layout')

@section('content')
    <h1>Liste des produits</h1>
    <div class="main">
            <div class="texte">
                <img src="{{$product['picture_url']}}" alt="product_image">
                <p>{{$product['name']}}</p>
                <p>{{$product['price']}} €</p>
                <p>{{$product['weight']}} g</p>
                <p>{{$product['discount']}} %</p>
            </div>
    </div>
    @endsection


