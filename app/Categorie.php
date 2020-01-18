<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    protected $fillable=['nom', 'is_online'];


    // Récupérer les produits d'une catégorie >> one to many
    public function produits() {
        return $this->hasMany('App\Produit');
    }

    // Récupérer la catégorie parente d'une catégorie
    public function parent() {
        return $this->belongsTo('App\Categorie');
    }

    // Récupérer les catégories enfant d'une catégorie
    public function enfants() {
       return $this->hasMany('App\Categorie','parent_id');
   }


}
