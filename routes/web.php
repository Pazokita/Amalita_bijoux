<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

// Afficher la page d'accueil
Route::get('/','Shop\MainController@index')->name('homepage');

// Afficher la page produits dans une catégorie
Route::get('/categorie/{id}','Shop\MainController@viewByCategorie')->name('voir_par_cat');

// Afficher la page pour consulter le détail d'un produit
Route::get('/produit/{id}','Shop\MainController@produit')->name('voir_produit');

