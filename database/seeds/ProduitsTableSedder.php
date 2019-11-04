<?php

use Illuminate\Database\Seeder;

class ProduitsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit = new \App\Produit();
        $produit->nom = "Collier Andrea";
        $produit->prix_ht = 25;
        $produit->description = "Collier en perles et fil bleu.";
        $produit->photo_principale = "collier-plastron-perle-et-fil.jpg";
        $produit->categorie_id = 1;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Boucles d'oreilles Andrea";
        $produit->prix_ht = 15;
        $produit->description = "Boucles d'oreille bleu en perle et fil.";
        $produit->photo_principale = "boucles-d-oreilles-inde-avec-matieres-et-perles.jpg";
        $produit->categorie_id = 2;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Boucles d'oreilles Martina";
        $produit->prix_ht = 20;
        $produit->description = "Boucles d'oreilles longues multi anneaux metal fin.";
        $produit->photo_principale = "boucles-d-oreilles-longues-mutli-anneaux-metal-fin-entremeles.jpg";
        $produit->categorie_id = 2;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Collier Martina";
        $produit->prix_ht = 25;
        $produit->description = "Collier multichaînes.";
        $produit->photo_principale = "collier-multirangs-chaines-perles-pampille-et-pompon.jpg";
        $produit->categorie_id = 1;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Bijoux de cheveux Amalia";
        $produit->prix_ht = 30;
        $produit->description = "Bijoux de cheveux en chaînes.";
        $produit->photo_principale = "bijoux_cheveux_chaine.jpg";
        $produit->categorie_id = 5;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Boucles d'oreilles Adeline";
        $produit->prix_ht = 15;
        $produit->description = "Boucles d'oreilles rondes avec pampilles et pompons.";
        $produit->photo_principale = "boucles-d-oreilles-post-rondees-avec-pampilles-et-pompons.jpg";
        $produit->categorie_id = 2;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Bracelet Chloé";
        $produit->prix_ht = 25;
        $produit->description = "Bracelet en chaîne argenté.";
        $produit->photo_principale = "bracelet-coulissant-chaine.jpg";
        $produit->categorie_id = 3;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Collier Adeline";
        $produit->prix_ht = 35;
        $produit->description = "Collier multi-perles court bleu.";
        $produit->photo_principale = "collier-court-rond-multi-perles.jpg";
        $produit->categorie_id = 1;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Collier Evelyne";
        $produit->prix_ht = 25;
        $produit->description = "Collier sautoire cercles metalliques";
        $produit->photo_principale = "collier-sautoir-pieces-resines-metal-et-cercles.jpg";
        $produit->categorie_id = 1;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Bracelet Andrea";
        $produit->prix_ht = 25;
        $produit->description = "Bracelet avec un lot de 5, matières et papilles.";
        $produit->photo_principale = "lot-de-5-bracelets-inde-avec-matieres-et-pampilles.jpg";
        $produit->categorie_id = 1;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "Bracelet Evelyne";
        $produit->prix_ht = 25;
        $produit->description = "Bracelet avec un lot de 5, matières et strass.";
        $produit->photo_principale = "lot-de-8-bracelets-rigides-metal-strass.jpg";
        $produit->categorie_id = 1;
        $produit->save();
    }
}
