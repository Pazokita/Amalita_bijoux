<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produit extends Model
{

    protected $fillable=['nom', 'prix_ht', 'description', 'photo-principale', 'quantite'];

    // Récupérer la catégorie liée à un produit
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    // Récupérer les produits recommandés
    public function recommandations()
    {
        return $this->belongsToMany('App\Produit', 'produit_recommande', 'produit_id', 'produit_recommande_id')->withTimestamps();
    }
    // Afficher le prix TTC
    public function prixTTC()
    {
        return number_format($this->prix_ht * 1.2, 2);
    }

    //afin qu'il n'y ai pas d'erreur sur le panier avec des sommes avec , on appelle la function ci-dessous dans le panier
    public function prixTTCPanier()
    {
        return $this->prix_ht *  1.2;
    }





}


