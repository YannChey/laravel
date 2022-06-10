<?php

use Illuminate\Support\Facades\Route;

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
   return 'Homepage';
    //return view('welcome');
});

Route::get('/product', function () {
    return 'Liste des produits';
});

Route::get('/product/{id}', function (int $id) {
    return 'Fiche du produit '. $id;
});

Route::get('/cart', function () {
    return 'Panier';
});

//Redirect::action('PageController@about');
//Config::get('app.aliases.Cookie');

