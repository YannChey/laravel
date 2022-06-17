@extends('layout')


@section('content')

 <div class="container">
     @foreach($categories as $categorie)
         {{$categorie->products}}
     @endforeach


 </div>


@endsection
