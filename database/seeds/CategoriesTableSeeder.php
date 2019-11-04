<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//
        $categorie = new \App\Categorie();
        $categorie->nom = "Colliers";
        $categorie->save();

        $categorie2 = new \App\Categorie();
        $categorie2->nom = "Boucles d'oreilles";
        $categorie2->save();

        $categorie3 = new \App\Categorie();
        $categorie3->nom = "Bracelets";
        $categorie3->save();

        $categorie4 = new \App\Categorie();
        $categorie4->nom = "Petits prix";
        $categorie4->save();

        $categorie5 = new \App\Categorie();
        $categorie5->nom = "Bijoux de cheveux";
        $categorie5->save();

        $categorie5 = new \App\Categorie();
        $categorie5->nom = "Nouvelle collection";
        $categorie5->save();
    }
}
