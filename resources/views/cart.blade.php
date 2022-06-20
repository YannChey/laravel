@extends('layout')

@section('content')

    @if($product)
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
                    <td>{{$product->wanted_quantity}}</td>
                    <td>{{$product->price*$product->quantity}} €</td>
                </tr>
                </tbody>
            </table>
        </div>
    @else
        ERROR
    @endif

@endsection

