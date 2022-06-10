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
});

Route::get('/product', function () {
    return 'Liste des produits';
});

Route::get('/product/{id}', function () {
    return 'Fiche du produit';
});

Route::get('/cart', function () {
    return 'Panier';
});

//Redirect::action('PageController@about');
//Config::get('app.aliases.Cookie');
