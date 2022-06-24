@extends('layout')


@section('content')

    <div class="container">
        
                {{--                                @foreach($categories as $categorie)--}}
                {{--                                <tr><td style="font-weight: bold">{{$categorie->name}}</td></tr>--}}
                {{--                                    @foreach($products as $product)--}}
                {{--                                        @if($categorie->id===$product->category_id)--}}
                {{--                                            <tr><td>{{$product->name}}</td></tr>--}}
                {{--                                        @endif--}}
                {{--                                    @endforeach--}}
                {{--                                @endforeach--}}

                @foreach($categories as $category)
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">{{$category->name}}</th>
                        </tr>
                        </thead>
                        @foreach($category->products as $product)
                            <tbody>
                            <tr>
                                <td>{{$product->name}}</td>
                            </tr>
                            </tbody>
                            @endforeach
                            @endforeach
                            </tr>
                            </tbody>
                    </table>

    </div>

@endsection
