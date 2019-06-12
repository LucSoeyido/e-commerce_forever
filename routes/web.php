
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/produits/{id}', function () {
    return view('product_details');
})->name('product_details');

Route::get('base_du_bien_etre', function () {
	$categories=App\Produit::all()->where('categories', 'bienetre');
    return view('shop')->with('Produit',$categories);
})->name('base_du_bien_etre');
Route::get('ruche', function () {
	$categories=App\Produit::all()->where('categories', 'ruche');
    return view('shop')->with('Produit',$categories);
})->name('ruche');
Route::get('panier', function () {
	     $panier=App\Commande::all()->where('iduser', Auth::user()->id);
         return view('panier')->with('Produit',$panier);
})->name('panier');
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('produitcontrol', 'ProduitController');

Route::resource('produitview', 'ProduitController@produitview');
Route::resource('commande', 'CommandeController');

