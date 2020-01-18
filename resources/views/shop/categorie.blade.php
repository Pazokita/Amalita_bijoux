@extends('shop')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{route('homepage')}}">
                       Accueil</a>
                <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('voir_par_cat', ['id'=>$categories->id])}}">
                            {{$categories->nom}}</a>
                    </li>

            </ol>
        </nav>


<div class="row">
   @foreach($produits as $produit)
       <div class="col-lg-4 col-sm-6 portfolio-item">
           <div class="card h-100">
               <a href="{{route('voir_produit', ['id'=>$produit->id])}}"><img class="card-img-top" src="{{asset('storage/upload/'.$produit->photo_principale)}}"
                                alt=""></a>
               <div class="card-body">
                   <h4 class="card-title">
                       <a href="#">{{$produit->nom}}</a>
                   </h4>
                   <p class="card-text">{{$produit->description}}</p>
                   <div class="d-flex justify-content-between align-items-center">
                       <span class="price">{{$produit->prixTTC()}} €</span>
                       <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                   </div>
               </div>
           </div>
       </div>
   @endforeach
</div>

<!-- Pagination -->
<ul class="pagination justify-content-center">
   <li class="page-item">
       <a class="page-link" href="#" aria-label="Previous">
           <span aria-hidden="true">&laquo;</span>
           <span class="sr-only">Previous</span>
       </a>
   </li>
   <li class="page-item">
       <a class="page-link" href="#">1</a>
   </li>
   <li class="page-item">
       <a class="page-link" href="#">2</a>
   </li>
   <li class="page-item">
       <a class="page-link" href="#">3</a>
   </li>
   <li class="page-item">
       <a class="page-link" href="#" aria-label="Next">
           <span aria-hidden="true">&raquo;</span>
           <span class="sr-only">Next</span>
       </a>
   </li>
</ul>

</div>
<!-- /.container -->

@endsection
