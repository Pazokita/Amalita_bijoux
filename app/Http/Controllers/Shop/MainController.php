<?php

namespace App\Http\Controllers\Shop;

use App\Categorie;
use App\Http\Controllers\Controller;
use App\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        // SELECT * FROM Produits;
        $produits = Produit::all();
//        dd($produits);
        return view('shop.index', compact('produits'));
    }


    // Voir les produits d'une catégorie
    public function viewByCategorie(Request $request)
    {

        $cat = Categorie::find($request->id);
        $produits = $cat->produits;
        return view('shop.categorie', ['produits' => $produits, 'cat' => $cat]);
    }

    //voir le détail du produit
    public function produit(Request $request)
    {

        $p = Produit::find($request->id);

//        dd($p);
        return view('shop.produit', ["p" => $p]);

    }
}
