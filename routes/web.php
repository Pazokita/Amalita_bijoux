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

// homepage view
Route::get('/','Shop\MainController@index')->name('homepage');


// view by category
Route::get('/categorie/{id}','Shop\MainController@vueParCategorie')->name('voir_par_cat');

// Detail of a product
Route::get('/produit/{id}','Shop\MainController@produit')->name('voir_produit');

//Add a product on the cart
Route::post('/panier/add/{id}', 'Shop\CartController@add')->name('add_product_cart');

//check the quantity on a cart
Route::post('/panier/qte/check', 'Shop\MainController@changeSizeAjax')->name('panier_qte_check');

//Update the cart
Route::post('/panier/qte/update/{id}', 'Shop\CartController@update')->name('panier_qte_update');

//remove a product on the cart
Route::get('/panier/remove/{id}', 'Shop\CartController@remove')->name('remove_product_cart');

//Afficher le contenu du produit
Route::get('/panier', 'Shop\CartController@index')->name('cart_index');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/mt/login','Auth\LoginController@loginAmalita')->name('login_Amalita_bijoux');
Route::post('/mt/process/login','Auth\LoginController@loginProcess')->name('login_process_Amalita_bijoux');

//routes pour process de commande
Route::get('/commande/identification', 'Shop\ProcessController@identification')->name('commande_identification');
Route::get('/commande/adresse', 'Shop\ProcessController@adresse')->name('commande_adresse');
Route::post('/commande/store/adresse', 'Shop\ProcessController@adresseStore')->name('commande_store_adresse');
Route::get('/commande/paiement', 'Shop\ProcessController@paiement')->name('commande_paiement');
Route::get('/commande/store', 'Shop\ProcessController@commandeStore')->name('commande_store');
Route::get('/commande/merci', 'Shop\ProcessController@merci')->name('commande_merci');



Route::middleware('auth.admin')->group(function(){
    Route::get('/backend','Backend\ProduitController@index')->name('backend_homepage');


    Route::get('/backend/categorie/add','Backend\CategorieController@add')->name('backend_categorie_add');
    Route::post('/backend/categorie/store','Backend\CategorieController@store')->name('backend_categorie_store');
    Route::get('/backend/categorie/edit/{id}','Backend\CategorieController@edit')->name('backend_categorie_edit');
    Route::post('/backend/categorie/update/{id}','Backend\CategorieController@update')->name('backend_categorie_update');
    Route::get('/backend/categorie/delete/{id}','Backend\CategorieController@delete')->name('backend_categorie_delete');
    Route::get('/backend/categorie','Backend\CategorieController@index')->name('backend_categorie_index');

    Route::get('/backend/produit/','Backend\ProduitController@index')->name('backend_produit_index');
    Route::get('/backend/produit/edit/{id}','Backend\ProduitController@edit')->name('backend_produit_edit');

    Route::get('/backend/produit/add','Backend\ProduitController@add')->name('backend_produit_add');
    Route::get('/backend/produit/delete','Backend\ProduitController@delete')->name('backend_produit_delete');
    Route::post('/backend/produit/store','Backend\ProduitController@store')->name('backend_produit_store');

    Route::post('/backend/produit/edit/{id}','Backend\ProduitController@update')->name('backend_produit_update');


    Route::get('/backend/commande','Backend\CommandeController@index')->name('backend_commande_index');

    Route::get('/backend/commande/{id}','Backend\CommandeController@show')->name('backend_commande_show');

});



