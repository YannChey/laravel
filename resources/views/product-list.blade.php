@extends('layout')

@section('content')
    <h1>Liste des produits</h1>
    <div class="sort">
        <form method="get" action="/product">
        <select name="sort" id="sort-select">
            <option name="name" value="name">Trier par Nom</option>
            <option name="price" value="price">Trier par prix</option>
        </select>
        <button type="submit" class="btn btn-outline-warning">Trier</button>
        </form>
    </div>
    <div class="main container row row-cols-1 row-cols-sm-3 row-cols-md-3 g-4">
        @foreach($products as $key => $product)
            <div class="texte">
                <img src="{{$product->picture_url}}" alt="product_image">
                <p>{{$product->name}}</p>
                <p>Prix : {{$product->price}} €</p>
                <p>Poids : {{$product->weight}} g</p>
                <p>Réduction : {{$product->discount}} %</p>
                <p>@if($product->discount>0)
                        Prix final : {{$product->price-($product->price/100*$product->discount)}} €
                    @else
                        Prix final : {{$product->price}} €
                    @endif</p>
                <a href="product/{{$product->id}}"><button class="btn btn-outline-warning">Accéder au détail de l'article</button></a>
            </div>
        @endforeach

    </div>
@endsection