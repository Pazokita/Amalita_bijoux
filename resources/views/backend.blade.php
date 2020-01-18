<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/Favicon_Amalita.jpg')}}">

    <title>Amalita Bijoux Backend</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset('vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom styles -->
    <link href={{asset("css/backend.css")}} rel="stylesheet">  -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-dark fixed-top bg-red flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('homepage')}}"><img id="logo" src={{"/img/Logo_amalita_white.png"}}  alt="logo"/></a>


</nav>

<br>

@include('shop.messages_flash')

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-black sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend_homepage')}}">
                            <span data-feather="file"></span>
                            Produits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend_categorie_index')}}">
                            <span data-feather="shopping-cart"></span>
                            Catégories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend_commande_index')}}">
                            <span data-feather="users"></span>
                            Commandes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')
    </div>
</div>


<!-- Bootstrap core JavaScript -->
<script src={{asset("vendor/jquery/jquery.min.js")}}></script>
<script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

</body>

</html>

