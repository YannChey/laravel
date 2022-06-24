@extends('layout')

@section('content')

    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Categorie</th>
                <td>Produit</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($categories as $category)
                    <th>{{$category->name}}</th>
                    @foreach($category->products as $product)
                       <td>{{$product->name}}</td>
                       <td>{{$product->name}}</td>
                    @endforeach
                @endforeach
            </tr>
            </tbody>

        </table>
    </div>

@endsection
