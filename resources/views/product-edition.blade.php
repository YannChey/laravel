@extends('layout')

@section('content')

    <main class="container">
        <h1>Liste des produits</h1>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Entrer nouveau produit</h2>
            </div>
            <div class="panel-body">
                <form class="" action="/backoffice/{{$id}}" method="post">
                    {{ csrf_field() }} @method('PUT')
                    <div class="form-group">
                        <label for="reference">Réference</label>
                        <input type="text" class="form-control" name="reference" id="reference" placeholder="reference">
                    </div>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="description">
                    </div>
                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label for="weight">Poids</label>
                        <input type="text" class="form-control" name="weight" id="weight" placeholder="weight">
                    </div>
                    <div class="form-group">
                        <label for="img_url">URL Image</label>
                        <input type="text" class="form-control" name="img_url" id="img_url" placeholder="img_url">
                    </div>
                    <div class="form-group">
                        <label for="quantity_stock">Quantité en stock</label>
                        <input type="text" class="form-control" name="quantity_stock" id="quantity_stock" placeholder="quantity_stock">
                    </div>
                    <div class="form-group">
                        <label for="available">Disponible?</label>
                        <select name="available" id="available" class="form-control">
                            <option value="oui">oui</option>
                            <option value="non">non</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categories_id">Catégorie</label>
                        <input type="text" class="form-control" name="categories_id" id="categories_id" placeholder="categories_id">
                    </div>
                    <div class="form-group">
                        <label for="discount">Discount</label>
                        <input type="text" class="form-control" name="discount" id="discount" placeholder="discount">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </main>
@stop
