<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
//   return 'Homepage';
//    //return view('welcome');
//});

Route::get('/',[HomeController::class,'start']);

//Route::get('/product', function () {
//    return 'Liste des produits';
//});

Route::get('/product',[ProductController::class,'product']);

//Route::get('/product/{id}', function (int $id) {
//    return 'Fiche du produit '. $id;
//});

Route::get('/product/{id}', [ProductController::class,'id']);

//Route::get('/cart', function () {
//    return 'Panier';
//});

Route::get('/cart', [CartController::class,'cart']);

//Redirect::action('PageController@about');
//Config::get('app.aliases.Cookie');

