@extends('backend')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Modifier la catégorie {{$categorie->nom}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="{{route('backend_categorie_add')}}"> <button class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    Nouveau
                </button></a>
            </div>
        </div>
        <form action="{{route('backend_categorie_update',['id'=>$categorie->id])}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Nom de la catégorie</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{$categorie->nom}}">
                </div>


            </div>
            <div class="form-group form-check">

                @if($categorie->is_online)
                    <input type="checkbox" class="form-check-input" id="is_online" checked name="is_online" value="1">
                @else
                    <input type="checkbox" class="form-check-input" id="is_online" name="is_online" value="1">
                @endif

                <label for="is_online">Cochez la case si la catégorie est online </label>
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </main>
@endsection
