@extends('layout')

@section('content')
    <h1 class="text-center py-4">Edit Product</h1>
    <div class="container py-4">
        <div class="row g-5">
            <form class="needs-validation" method="post"
                  action="{{ route('backoffice.update', ["product" => $product] )}}">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{ $product->name }}" >
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="descriptionMain" class="form-label">Description Main</label>
                        <input type="text" class="form-control" id="descriptionMain"
                               name="deqcription_main"
                               value="{{ $product->deqcription }}">
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="url_image"
                               value="{{ $product->url_image }}" >
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price"
                               value="{{ $product->price }}" >
                        <div class="invalid-feedback">
                    </div>

                    <div class="col-12">
                        <label for="quantity" class="form-label">quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity"
                               value="{{ $product->quantity }}" >
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="available" class="form-label">available</label>
                        <input type="number" class="form-control" id="available" name="available"
                               value="{{ $product->available }}" >
                        <div class="invalid-feedback">
                        </div>
                    </div>



                    <input class="w-100 btn btn-lg" type="submit"
                           style="background-color: #aa3e02; color: white"
                           value="update product">
                </div>
            </form>
        </div>
    </div>

@endsection