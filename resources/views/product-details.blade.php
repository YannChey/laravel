@extends('layout')

@section('content')

    <div class="main">
<<<<<<< HEAD
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
=======
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
            <form action="{{route('cart',['product'=>$product])}}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <label for="num">Quantité : </label>
                <input type="number" name="wanted_quantity" min="1" max="20" required><br><br>
                <button type="submit" class="btn btn-outline-warning">Commander</button>
                </a>
            </form>
        </div>
>>>>>>> 85c02bccb71a873d578585f73ade49e60dc3d835
    </div>
@endsection


