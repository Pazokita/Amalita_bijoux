@extends('shop')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('homepage')}}">Accueil</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{route('voir_produit', ['id'=>$produits->id])}}">
                    {{$produits->nom}}</a>
            </li>
        </ol>
    </nav>
    <!-- Page Content -->
    <div class="container">

{{--{{dd($p)}}--}}

        <!-- Produits -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset('storage/upload/'.$produits->photo_principale)}}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{$produits->nom}}</h3>
                <p>{{$produits->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="price">{{$produits->prixTTC()}} €</span>
                </div>

                <hr>
                <form action="{{route('add_product_cart', ['id'=>$produits->id])}}" method="post" id="panier_add">
                    @csrf

                    <p>

                            {{-- s'il n'y a pas de produit on ne peut pas ajouter des produits seulement pour produit sans taille--}}

                                <label for="qte">Quantité</label>
                                {{--autocomplete pour que les champs ne se remplissement pas automatiquement --}}
                                <input id="qte" type="number" max="{{$produits->qte}}" min=1 name="qte"
                                       autocomplete="off"
                                       value="1" class="form-control">

                    </p>
                </form>
                <hr>
                <button type="submit" form="panier_add" id="bouton_panier" class="btn btn-cart my-2 btn-block">
                    <i class="fas fa-shopping-cart">
                    </i> Ajouter au Panier
                </button>
            </div>

        </div>
        <!-- /.row -->



        <hr>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <h3># Vous aimerez aussi :</h3>
                </div>
                <div class="row">
                    @foreach($produits->recommandations as $recommandation)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('storage/upload/'.$recommandation->photo_principale)}}" class="card-img-top img-fluid" alt="Responsive image">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="{{route('voir_produit',['id'=>$recommandation->id])}}"class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>


    </div>
    <!-- /.container -->
    @endsection
