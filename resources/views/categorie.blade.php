@extends('layout')

@section('content')

    @foreach($categories as $cat)
        {{$cat->name}}
        @foreach($products as $product)
            @if($cat->id===$product->categorie)
                {{$product->categories}}
            @endif
        @endforeach
    @endforeach

@endsection
