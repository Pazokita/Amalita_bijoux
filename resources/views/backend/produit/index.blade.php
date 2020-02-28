@extends('backend')
@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Gestion des produits</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{route('backend_produit_add')}}" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    Nouveau
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead class="table-dark">
                <tr>

                    <th></th>
                    <th>ID</th>
                    <th>Nom du produit</th>
                    <th>Prix</th>
                    <th>Qté</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produits as $p)
                    <tr>
                        <td><img src="{{asset('storage/upload/' .$p->photo_principale)}}" width="50"
                                 class="img-thumbnail"></td>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nom}}</td>
                        <td>{{$p->prix_ht}}</td>
                        <td>{{$p->quantite}}</td>
                        <td>
                            <a href="{{route('backend_produit_edit', ['id'=>$p->id])}}" class="btn btn-sm btn-primary">Voir
                                / Modifier
                            </a>
                                <a onclick="return (confirm('Souhaitez-vous vraiment supprimer ce produit?'))"
                                   href="{{route('backend_produit_delete', ['id'=>$p->id])}}"
                                   class="btn btn-sm btn-outline-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection

