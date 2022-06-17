@extends('layout')

@section('content')
    ²
    <main class="container">
        <h1>Liste des produits</h1>

        <div class="main d-flex flex-column row-cols-1">
            @foreach($products as $product)

                <div class="card my-3 align-items-center flex-row">

                    <div class="col-4 ">

                        <img src="{{$product->img_url}} "
                             class=" img-fluid rounded-circle border-primary ms-2 mt-1"
                             alt="{{'photo de ' . $product->name}} ">

                        <h3 class="card-title text-center fw-bold ms-3 ">
                            {{$product->name}} </h3>
                    </div>

                    <div class="col-8">
                        <div class="card-body">
                            <p class="card-text text-center text-white">
                            <p>Prix TTC: {{$product->price}}</p>
                            {{--                            <p>Prix TTC: {{formatPrice($product->price)}}</p>--}}
                            {{--                            <p>Prix--}}
                            {{--                                HT: {{formatPrice(priceExcludingVAT($product->price))}}</p>--}}
                            {{$product->discount !== null}}

                            <p>Discount : {{$product->discount}} %</p>
                            <p>Prix promo
                                {{--                                : {{formatPrice(discountedPrice($product->price, $product->discount))}} </p>--}}
                                : {{$product->price, $product->discount}} </p>
                            <label for="{{$product->name}}">Qté:</label>
                            <input type="number" id="{{$product->name}}" min="0"
                                   name="panier[ {{$product->name}} ]"
                                   class="text" value="0">
                            <input type="submit" value="COMMANDER">

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </main>
@stop
