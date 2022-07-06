@extends('layout')

@section('content')
    <h1>Liste des produits</h1>

    @foreach($products as $product)
    <div class="texte">
        
        <a href="product/{{$product->idproducts}}"><img src="{{$product->idproducts}}" alt="product_image"></a>
        <p>{{$product->name}}</p>
        <p>{{$product->category->name}}</p>
        <p>{{$product->price}} €</p>
        <p>{{$product->weight}} g</p>
        {{-- @dump($product->category->name) --}}
        @if($product->discount > 0)
        <p>{{$product->discount}} %</p>
        @endif
        

        <ul>
            <li> texte</li>
        </ul>
    </div>
@endforeach
@endsection