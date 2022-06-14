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
    <!-- Styles -->
    <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1524180/codepen-template-1.0.css" rel="stylesheet" />
    <!-- Scripts -->



</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Monkey's and Bananas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../product">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart">Panier</a>
                    </li>
                    <li><img src=""></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <canvas id="canvas" width="550" height="500"></canvas>
    </div>
    <a href="https://createjs.com/" target="_blank"><img class="logo white verbose"></a>

    <div id="badges">
        <div class="badge white move"></div>
        <div class="badge white click"></div>
    </div>
</header>

@yield('content')
<script src="https://code.createjs.com/1.0.0/createjs.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1524180/RelativePlugin.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1524180/codepen-template-1.0.js"></script>
<script src="/script.js"></script>
</body>

</html>
