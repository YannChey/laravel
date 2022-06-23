@extends('layout')

@section('content')
    <h1>Liste des produits</h1>
    
    <a href="product/price"><p>trie par prix</p></a>
    <a href="product/name"><p>trie par nom</p></a>
    <div class="main">
        @foreach($products as $product)
            <div class="texte">
                
                <a href="product/{{$product->idproducts}}"><img src="{{$product->idproducts}}" alt="product_image"></a>
                <p>{{$product->name}}</p>
                <p>{{$product->price}} €</p>
                <p>{{$product->weight}} g</p>
                
                @if($product->discount > 0)
                <p>{{$product->discount}} %</p>
                @endif
                
            </div>
        @endforeach

    </div>
@endsection