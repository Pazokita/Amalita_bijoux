<?php

namespace App\Http\Controllers\Shop;

use App\Categorie;
use App\Http\Controllers\Controller;
use App\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //Afficher la page d'accueil du shop
    public function index()
    {
        // SELECT * FROM Produits;

        $produits = Produit::all();
      //  $categories = Categorie::where('is_online', 1);
        //dd($produits);
        return view('shop.index', ['produits'=>$produits]);
    }


    // Voir les catégories is_online == 1
    public function vueParCategorie(Request $request)
    {
      $categories = Categorie::find($request->id);
      $produits = Produit::where('categorie_id', $request->id)->get();
      //dd($categories->categorie_id);
       // dd($request);
        return view('shop.categorie', ['produits'=>$produits, 'categories'=>$categories]);
    }

    //voir le détail du produit
    public function produit(Request $request)
    {

        $produits = Produit::find($request->id);
      //  dd($request);
        $categories = Categorie::where('is_online', 1);
//        dd($produits);
        return view('shop.produit', ['categories'=>$categories, 'produits'=>$produits]);
    }

}
