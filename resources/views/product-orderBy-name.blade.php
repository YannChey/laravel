@extends('layout')

@section('content')
    <h1>Liste des produits par noms</h1>

    <div class="main">
        @foreach($products as $product)
            <div class="texte">
                
                <a href="product/{{$product->idproducts}}"><img src="{{$product->idproducts}}" alt="product_image"></a>
                <p>{{$product->name}}</p>
                <p>{{$product->price}} €</p>
                <p>{{$product->weight}} g</p>
                <p>{{$product->discount}} %</p>
            </div>
        @endforeach
    </div>
@endsection