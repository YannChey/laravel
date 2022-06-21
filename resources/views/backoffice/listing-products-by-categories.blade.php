@extends('layout')


@section('content')

    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Catégorie</th>
                <th>Produit</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($categories as $categorie)
                    <td>{{$categorie->name}}</td>
                    @foreach($products as $product)
                        @if($categorie->id===$product->category_id)
                        <td>{{$product->name}}</td>
                        @endif
                    @endforeach
                @endforeach
            </tr>
            </tbody>
        </table>

    </div>

@endsection
