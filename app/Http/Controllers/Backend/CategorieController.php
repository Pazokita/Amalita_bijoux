<?php

namespace App\Http\Controllers\Backend;

use App\Categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    // Lister les categorie
    public function index() {
        $categories = Categorie::all();
        return view('backend.Categorie.index',
            ['categories'=>$categories]);
    }
    // ajouter une catégorie
    public function add() {
        $categories = Categorie::all();
        return view('backend.Categorie.add',['categories'=>$categories]);
    }
    // stocker la catégorie dans la db
    public function store(Request $request) {
        $request->validate(
            ['nom'=>'required | max:255']
        );
        $categorie = new Categorie();
        $categorie->nom = $request->nom;
        if($request->is_online == 1) {
            $categorie->is_online = $request->is_online;
        } else {
            $categorie->is_online = false;
        }
        $categorie->save();

        return redirect()->route('backend_homepage')
            ->with('notice','La catégorie <strong>'.$categorie->nom.'</strong> a bien été ajoutée');
    }

    // Afficher le formulaire de modification
    public function edit(Request $request) {
        $categorie = Categorie::find($request->id);
        return view('backend.categorie.edit',['categorie'=>$categorie]);
    }

    // Stocker la modif dans la db
    public function update(Request $request) {
        $categorie = Categorie::find($request->id);
        $request->validate(
            ['nom'=>'required | max:255']
        );
        $categorie->nom = $request->nom;
        if($request->is_online == 1) {
            $categorie->is_online = $request->is_online;
        } else {
            $categorie->is_online = false;
        }
        $categorie->save();

        return redirect()->route('backend_homepage')
            ->with('notice','La catégorie <strong>'.$categorie->nom.'</strong> a été modifiée');
    }

    public function delete(Request $request) {
        $categorie = Categorie::find($request->id);
        $categorie->delete();
        return redirect()->route('backend_homepage')
            ->with('notice','La catégorie <strong>'.$categorie->nom.'</strong> a été supprimée');
    }

}
