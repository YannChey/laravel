<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monkey's and Bananas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <img class="logo" src="{{asset('img/Monkeys_and_Bananas.png')}}">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../product">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../cart">Panier</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
{{--    <div>--}}
{{--        <canvas id="canvas" width="550" height="500"></canvas>--}}
{{--    </div>--}}
{{--    <a href="https://createjs.com/" target="_blank"><img class="logo white verbose"></a>--}}

{{--    <div id="badges">--}}
{{--        <div class="badge white move"></div>--}}
{{--        <div class="badge white click"></div>--}}
{{--    </div>--}}
</header>

@yield('content')
{{--<script src="https://code.createjs.com/1.0.0/createjs.js"></script>--}}
{{--<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1524180/RelativePlugin.js"></script>--}}
{{--<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1524180/codepen-template-1.0.js"></script>--}}
{{--<script src="/script.js"></script>--}}
</body>

</html>
