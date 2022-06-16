@extends('layout')

@section('content')

    <div class="main">
            <div class="texte">
                <img src="{{$product['picture_url']}}" alt="product_image">
                <p>{{$product['name']}}</p>
                <p>{{$product['deqcription']}}</p>
                <p>{{$product['price']}} €</p>
                <p>{{$product['discount']}}</p>
                <p>{{$product['weight']}} g</p>
                <p>{{$product['url_image']}} %</p>
                <p>{{$product['quantity']}}</p>
                <p>{{$product['available']}}</p>
            </div>
    </div>
    @endsection


