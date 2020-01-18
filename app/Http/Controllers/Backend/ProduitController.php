<?php

namespace App\Http\Controllers\Backend;

use App\Categorie;
use App\Http\Controllers\Controller;
use App\Produit;

use Illuminate\Http\Request;



class ProduitController extends Controller
{
    //
    public function index()
    {
        $produits = Produit::all();
//        dd($produits);
        return view('backend.produit.index', ['produits' => $produits]);
    }

    public function edit(Request $request)
    {
        $produits = Produit::all();
        $produit = Produit::find($request->id);
        $categories = Categorie::all();

        $produit_recommandations = [];
        foreach ($produit->recommandations as $r) {
            $produit_recommandations [] = $r->id;
            //dd($produit_recommantions);
        }
        return view('backend.produit.edit', ['produits' => $produits,
            'categories' => $categories,
            'produit' => $produit,
            'produit_recommandations' => $produit_recommandations
        ]);

    }

    public function add()
    {
        $produits = Produit::all();
        $categories = Categorie::all();

        return view('backend.produit.add', ['produits' => $produits, 'categories' => $categories]);
    }

//stocker les données du formulaire
    public function store(Request $request)
    {
        $request->validate(
            ['nom' => 'required|max:900',
                'prix_ht' => 'required',
                'description' => 'required',
                'quantite' => 'required',
                'categorie_id' => 'required',
                'photo-principale' => 'required image|max:1999'

            ]);

        if ($request->hasFile('photo_principale')) {
            //récuperer le nom de l'image
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            //Télechargement de l'image
            $request->file('photo_principale')->storeAs('public/upload', $fileName);
            //dd(public_path('upload/' .$fileName));


        }
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->prix_ht = $request->prix_ht;
        $produit->description = $request->description;
        $produit->photo_principale = $fileName;
        $produit->quantite = $request->quantite;
        $produit->categorie_id = $request->categorie_id;
        $produit->save();

        if ($request->produits_recommandes) {
            foreach ($request->produits_recommandes as $id) {
                $produit->recommandations()->attach($id);
            }
        }

        return redirect()->route('backend_homepage')
            ->with('notice', 'Le produit <strong> ' . $produit->nom . '</strong> a été ajouté');

    }

    public function update(Request $request)
    {
        $produit = Produit::find($request->id);
        $request->validate(
            ['nom' => 'required|max:900',
                'prix_ht' => 'required',
                'description' => 'required',
                'quantite' => 'required',
                'categorie_id' => 'required',
                'photo-principale' => 'required image|max:1999'

            ]);
        if ($request->hasFile('photo_principale')) {
            //récuperer le nom de l'image
            $fileName = $request->file('photo_principale')->getClientOriginalName();
            //Télechargement de l'image
            $request->file('photo_principale')->storeAs('public/upload', $fileName);
            //dd(public_path('upload/' .$fileName));
           $produit->photo_principale = $fileName;
        }

        $produit->nom = $request->nom;
        $produit->prix_ht = $request->prix_ht;
        $produit->description = $request->description;

        $produit->quantite = $request->quantite;
        $produit->categorie_id = $request->categorie_id;
        $produit->save();


        $produit->recommandations()->sync($request->produits_recommandes);

        return redirect()->route('backend_homepage')
            ->with('notice', 'Le produit <strong> ' . $produit->nom . '</strong> a été modifié');

    }

    public function delete(Request $request)
    {
        $produit = Produit::find($request->id);
        $produit->delete();
        return redirect()->route('backend_homepage')
            ->with('notice', 'Le produit <strong>' . $produit->nom . '</strong> a été supprimé');


    }


}
