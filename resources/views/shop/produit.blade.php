@extends('shop')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Laissez vous tenter !

        </h1>
{{--{{dd($p)}}--}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Accueil</a>
            </li>
            <li class="breadcrumb-item active">Collier</li>
            <li class="breadcrumb-item ">Nom</li>
        </ol>

        <!-- Produits -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('produits/'.$p->photo_principale)}}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{$p->nom}}</h3>
                <p>{{$p->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="price">{{$p->prix_ht}} €</span>
                </div>
                <p>
                    <a href="#" class="btn btn-cart"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                </p>
            </div>

        </div>
        <!-- /.row -->



        <hr>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <h3>Vous aimerez aussi :</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="http://placehold.it/700x300" class="card-img-top img-fluid" alt="Responsive image">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="http://placehold.it/700x300" class="card-img-top img-fluid" alt="Responsive image">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="http://placehold.it/700x300" class="card-img-top img-fluid" alt="Responsive image">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
    <!-- /.container -->
    @endsection
