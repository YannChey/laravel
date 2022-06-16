@extends('layout')

@section('content')

    <div class="container">
        <table class="table table-responsive table-bordered">
            <thead>
            <a type="button" href="/backoffice/create" class="btn btn-outline-warning">Ajouter un article</a>
            </thead>
            <thead>
            <tr>
                <th scope="col">Actions</th>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                {{--        <th scope="col">discount</th>--}}
                {{--        <th scope="col">weight</th>--}}
                {{--        <th scope="col">quantity</th>--}}
                <th scope="col">category</th>
                <th scope="col">display</th>
            </tr>
            </thead>
            @foreach($products as $product)
                <tbody>
                <tr>
                    <td style="display:flex">
                        <a style="margin-right:20px" type="button" class="btn btn-outline-warning">Modifier</a>
                        <form class="btn-outline-warning" action="/backoffice" method="delete"
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-outline-warning">Supprimer</button>
                        </form>
                    </td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category_id}}</td>
                    <td><a class="btn btn-outline-warning" href="/product/{{$product->id}}">Voir</a></td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
