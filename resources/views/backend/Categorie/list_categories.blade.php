
    <tr class="table-primary">
        <td>{{$categorie->id}}</td>
        <td>{{$categorie->nom}}</td>
        <td>
            @if($categorie->is_online)
                <span class="badge badge-success">oui</span>
            @else
                <span class="badge badge-danger">non</span>
            @endif
        </td>
        <td>
            <a href="{{route('backend_categorie_edit',['id'=>$categorie->id])}}"
               class="btn btn-sm btn-primary">Voir / Modifier</a>

            <a href="{{route('backend_categorie_delete',['id'=>$categorie->id])}}"
               class="btn btn-sm btn-outline-danger">Supprimer</a>
        </td>
    </tr>

