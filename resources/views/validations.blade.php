@extends('layout')

@section('content')

    <main class="container">
        <h1>Fiche technique du produit</h1>


        <div class="main d-flex flex-column row-cols-1">
           <h2> {{$text->getColor()}}</h2>
            <h2> {{$text->getName()}}</h2>
        </div>
    </main>
@stop
