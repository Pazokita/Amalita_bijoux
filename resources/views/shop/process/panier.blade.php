@extends('shop')

@section('content')

    <main id="main" role="main">
{{--dd($content)--}}
        <section class="py-5">
            <div class="container">
                <h1 class="jumbotron-heading"> <span class="panier">Votre panier </span></h1>
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Qte</th>
                        <th>P.U</th>
                        <th>Total TTC</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($content as $produit)
                    <tr>
                        <td>
                            <img width="110" class="rounded-circle img-thumbnail" src={{asset('storage/upload/'.$produit['attributes']['photo'])}} alt="Card image
                        cap"> <br>
                           <span class="text-center">{{$produit->name}}</span>
                            <br><p class="text-right"><a class="text-dark" href="{{route('remove_product_cart', ['id'=>$produit['id']])}}">
                                <i class="fa fa-trash"></i>
                            </a></p>
                        </td>
                        <form action="{{route('panier_qte_update', ['id'=>$produit['id']])}}" method="post">
                            @csrf
                         <td>
                                <input style="display: inline-block" name="qte" class="form-control col-sm-4"
                                       type="number" max="{{$produit['attributes']['qte_maxi']}}" value="{{$produit['quantity']}}">


                                <button
                                    class="pl-2 change_qte" id="bouton_panier"><i class="fas fa-sync"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            {{$produit['attributes']['prix_ttc']}}
                        </td>
                        <td>
                            {{number_format($produit['attributes']['prix_ttc'] * $produit['quantity'], 2)}} €
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td>Total HT</td>
                        <td>{{number_format($total_ht_panier, 2)}} €</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>TVA (20%)</td>
                        <td>{{number_format($tva, 2)}} €</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>Total TTC</td>
                        <td>{{number_format($total_ttc_panier, 2)}} €</td>
                    </tr>
                    </tfoot>
                </table>
                <a id="bouton_panier" class="btn btn-block btn-outline-dark" href="{{route('commande_identification')}}">Commander</a>
            </div>
        </section>





    </main>
@endsection
