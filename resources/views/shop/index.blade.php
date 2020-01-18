@extends('home')
@section('content')


<!-- Page Content -->
<div class="container">

    <h1 class="my-4"># Nouvelle collection</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
        @foreach($produits as $produit)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{route('voir_produit', ['id'=>$produit->id])}}"><img class="card-img-top" src="{{asset('storage/upload/'.$produit->photo_principale)}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('voir_produit', ['id'=>$produit->id])}}">{{$produit->nom}}</a>
                        </h4>
                        <p class="card-text">{{$produit->description}}</p>

                        <div class="d-flex justify-content-between align-items-center">

                            <a href="{{route('voir_produit', ['id'=>$produit->id])}}" class="btn btn-primary">Laissez vous tenter</a></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    {{--        {{dump($produits)}}--}}
    <h2># Bijoux</h2>

    <div class="row">
        @foreach($produits as $produit)
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{route('voir_produit', ['id'=>$produit->id])}}"><img class="card-img-top" src="{{asset('storage/upload/'.$produit->photo_principale)}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{route('voir_produit', ['id'=>$produit->id])}}">{{$produit->nom}}</a>
                    </h4>
                    <p class="card-text">{{$produit->description}}</p>
                    <span class="badge badge-info"><a class="text-white" href="{{route('voir_par_cat', ['id'=>$produit->categorie->id])}}">{{$produit->categorie->nom}}</a></span>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price">{{$produit->prixTTC()}} €</span>
                        <a href="{{route('voir_produit', ['id'=>$produit->id])}}"></a>
                        <p>
                            <a href="{{route('voir_produit', ['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">


        <div class="col-lg-6">
            <h2>Les tendances actuelles</h2>
            <p>Suivez les nouvelles tendances:</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
                reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum
                ducimus unde.</p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
        <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti
                beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
    </div>

</div>
<!-- /.container -->
@stop
