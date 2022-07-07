@extends('layout')

@section('content')

    <main class="container">
        <h1>Modifier la liste des produits</h1>



        <a href="{{route('backoffice.create')}}">
            <button type="submit" class="btn btn-outline-warning">Créer un produit</button>
        </a>

        <div class="main d-flex flex-column row-cols-1">
            @foreach($products as $product)

                <div class="card my-3 align-items-center flex-row">

                    <div class="col-4 ">

                        <a href="{{route('backoffice.edit',$product)}}">
                            <img src="{{$product->img_url}} "
                                 class=" img-fluid rounded-circle border-primary ms-2 mt-1"
                                 alt="{{'photo de ' . $product->name}} "></a>

                        <h3 class="card-title text-center fw-bold ms-3 ">
                            {{$product->name}} </h3>
                    </div>

                    <div class="col-8">
                        <div class="card-body">
                            <p class="card-text text-center text-white">
                            <p>Numéro ID : {{$product->id}}</p>
                            <p>Référence : {{$product->reference}}</p>
                            <p>Nom/Désignation : {{$product->name}}</p>
                            <p>Description : {{$product->description}}</p>
                            <p>Prix TTC: {{$product->price}} €</p>
                            <p>Poids : {{$product->weight}} g</p>
                            <p>Quantité en stock : {{$product->quantity_stock}} unités</p>
                            <p>Dispo (1=oui, 0=non) : {{$product->available}} </p>
                            <p>Catégorie : {{$product->category_id}}</p>
                            <p>Discount : {{$product->discount}} %</p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </main>
@stop
