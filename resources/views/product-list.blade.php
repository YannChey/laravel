@extends('layout')

@section('content')
    <h1>Liste des produits</h1>
    <div class="main">
        @foreach($products as $key => $product)
            <div class="texte">
                <a href="product/{{$key}}"><img src="{{$product['picture_url']}}" alt="product_image"></a>
                <p>{{$product['name']}}</p>
                <p>{{$product['price']}} €</p>
                <p>{{$product['weight']}} g</p>
                <p>{{$product['discount']}} %</p>
            </div>
        @endforeach
    </div>
@endsection
