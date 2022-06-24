@extends('layout')

@section('content')

    <main class="container">
        <h1>Liste des produits</h1>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Interface édition produit</h2>
            </div>
            <div class="panel panel-default">
                <form method="POST" action="{{ route('backoffice.destroy', $product) }}">
                    <!-- CSRF token -->
                    @csrf
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    @method("DELETE")
                    <input type="submit" value="x Supprimer">
                </form>
            </div>
        </div>
        <div class="panel-body">
            <form class="" action="{{route('backoffice.update',$product)}}" method="post">
                {{ csrf_field() }} @method('PUT')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="form-group">
                    <label for="reference">Réference</label>
                    <input value="{{$product->reference}}"  type="text" class="form-control" name="reference" id="reference" placeholder="reference">
                </div>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input value="{{$product->name}}" type="text" class="form-control" name="name" id="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input value="{{$product->description}}" type="text" class="form-control" name="description" id="description"
                           placeholder="description">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input value="{{$product->price}}" type="text" class="form-control" name="price" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="weight">Poids</label>
                    <input value="{{$product->weight}}" type="text" class="form-control" name="weight" id="weight" placeholder="weight">
                </div>
                <div class="form-group">
                    <label for="img_url">URL Image</label>
                    <input value="{{$product->img_url}}" type="text" class="form-control" name="img_url" id="img_url" placeholder="img_url">
                </div>
                <div class="form-group">
                    <label for="quantity_stock">Quantité en stock</label>
                    <input value="{{$product->quantity_stock}}" type="text" class="form-control" name="quantity_stock" id="quantity_stock"
                           placeholder="quantity_stock">
                </div>
                <div class="form-group">
                    <label for="available">Disponible?</label>
                    <select value="{{$product->available}}" name="available" id="available" class="form-control">
                        <option value="1">oui</option>
                        <option value="0">non</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="categories_id">Catégorie</label>

                    <input value="{{$product->category->id}}" type="text" class="form-control" name="categories_id" id="categories_id"
                           placeholder="category_id">
                </div>
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input value="{{$product->discount}}" type="text" class="form-control" name="discount" id="discount" placeholder="discount">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>

    </main>
@stop
