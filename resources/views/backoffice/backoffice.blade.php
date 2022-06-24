@extends('layout')

@section('content')
    <h1>Liste des produits</h1>
    
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
@endsection