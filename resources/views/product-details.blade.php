@extends('layout')

@section('content')

    <div class="main">
            <div class="texte">
                
                {{-- @dd($product); --}}
                <img src="{{$product->url_image}}" alt="product_image">
                <p>{{$product->name}}</p>
                <p>{{$product->deqcription}}</p>
                <p>{{$product->price}} €</p>
                <p>{{$product->discount}}</p>
                <p>{{$product->weight}} g</p>
                <p>Quantity : {{$product->quantity}}</p>
                <p>Available : {{$product->available}}</p>
            </div>
    </div>
    @endsection


