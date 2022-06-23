@extends('layout')


@section('content')

    <div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Commandes</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($orders as $order)
                <td>{{$order->id}}</td>
                    <td>{{$order->date}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>

    </div>

@endsection
