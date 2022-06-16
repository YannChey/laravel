{{--@extends('layout')--}}

@section('content')
    <h1>Liste des produits</h1>

    <div class="main">
        @foreach($products as $product)
            @dd($product->name);
            $item = new item_class($product["name"],
            $product["description"],
            $product["price"],
            $product["img_url"],
            $product["weight"],
            $product["quantity"],
            $product["available"]);

            <div class="card bg-bluegrey mb-5 mt-5">
                <div class="row align-items-center">

                    <div class="col-4">

                        <img src="{{$product->img_url}} "
                             class=" img-fluid rounded-circle border-primary ms-2 mt-1"
                             alt="{{'photo de ' . $product->name}} ">

                        <h3 class="card-title text-center fw-bold ms-3 text-white ">
                            <?php echo $product["name"] ?> </h3>

                    </div>


                    <div class="col-8">
                        <div class="card-body">
                            <p class="card-text text-center text-white">
                            <p>Prix TTC: <?php echo formatPrice($product["price"]) ?></p>
                            <p>Prix
                                HT: <?php echo formatPrice(priceExcludingVAT($product["price"])) ?></p>
                            <?php if ($product["discount"] !== null) { ?>

                            <p>Discount : <?php echo $product["discount"] ?> %</p>
                            <p>Prix promo
                                : <?php echo formatPrice(discountedPrice($product["price"], $product["discount"])) ?></p>
                            <?php } ?>
                            <label for="<?php echo $product["name"] ?>">Qté:</label>
                            <input type="number" id="<?php echo $product["name"] ?>" min="0"
                                   name="panier[<?php echo $product["name"] ?>]"
                                   class="text" value="0">
                            <input type="submit" value="COMMANDER">

                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
