@extends('backend')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Gestion des Catégories</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

                <a href="{{route('backend_categorie_add')}}" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    Nouveau
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <h4>Catégories</h4>
            <table class="table table-sm">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom de la catégorie</th>
                    <th>En ligne</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @each('backend.categorie.list_categories', $categories, 'categorie')
                </tbody>
            </table>

        </div>


    </main>
@endsection
