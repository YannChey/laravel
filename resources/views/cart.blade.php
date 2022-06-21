@extends('layout')

@section('content')
    <form class="container" action="{{route('cart.create')}}" method="POST">
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
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th><b>Produit</b></th>
                    <th><b>Prix unitaire</b></th>
                    <th><b>Quantité</b></th>
                    <th><b>Total</b></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}} €</td>
                    <td>{{$request->wanted_quantity}}</td>
                    <input type="hidden" name="priceTTC" value="{{$product->price*$request->wanted_quantity}}">
                    <td> {{$product->price*$request->wanted_quantity}}€</td>
                </tr>
                </tbody>
            </table>
        </div>

    <button type="submit" class="btn">Passer votre commande</button>
    </form>

@endsection

