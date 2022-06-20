@extends('layout')

@section('content')

    <div class="main">
        <div class="texte">
            <img src="{{$product->picture_url}}" alt="product_image">
            <p>{{$product->name}}</p>
            <p>{{$product->description}}</p>
            <p>{{$product->weight}} g</p>
            <p>Prix avant remise : {{$product->price}} €</p>
            <p style="color:red">Remise : {{$product->discount}} %</p>
            <p style="font-weight: bold">@if($product->discount>0)
                    Prix après remise : {{$product->price-($product->price/100*$product->discount)}} €
                @else
                    Prix après remise : {{$product->price}} €
                @endif</p>
            <form action="{{route('cart',$product)}}" method="POST">
                @csrf
                <label for="num">Quantité : </label>
                <input type="number" name="quantity" min="1" max="20" required><br><br>
                <button type="submit" class="btn btn-outline-warning">Commander</button>
                </a>
            </form>
        </div>
    </div>
@endsection


