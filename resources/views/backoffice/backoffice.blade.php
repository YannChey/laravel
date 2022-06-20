@extends('layout')

@section('content')

    <div class="container">
        <h2 style="text-align: center">Mes produits</h2>
        <a type="button" href="/backoffice/create" class="btn btn-outline-warning">Ajouter un article</a>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Actions</th>
                <th>name</th>
                <th>price</th>
                {{--        <th scope="col">discount</th>--}}
                {{--        <th scope="col">weight</th>--}}
                {{--        <th scope="col">quantity</th>--}}
                <th>category</th>
                <th>display</th>
            </tr>
            </thead>
            @foreach($products as $product)
                <tbody>
                <tr>
                    <td style="display:flex">
                        <a style="margin-right:20px" type="button"
                           href="{{route('product.edit',['product'=>$product])}}" class="btn btn-outline-warning">Modifier</a>
                        <form class="btn-outline-warning" action="{{route('product.delete',['product'=>$product])}}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                         {{$product->category->name}}
                    </td>
                    <td><a class="btn btn-outline-warning" href="/product/{{$product->id}}">Voir</a></td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
