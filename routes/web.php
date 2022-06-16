<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackOfficeController;

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

Route::get('/product',[ProductController::class,'products']);
Route::get('/productName',[ProductController::class,'productsSortByName']);
Route::get('/productPrice',[ProductController::class,'productsSortByPrice']);

//Route::get('/product/{id}', function (int $id) {
//    return 'Fiche du produit '. $id;
//});

Route::get('/product/{product}', [ProductController::class,'show']);

//Route::get('/cart', function () {
//    return 'Panier';
//});

Route::get('/cart', [CartController::class,'cart']);

//Redirect::action('PageController@about');
//Config::get('app.aliases.Cookie');

Route::get('/backoffice', [BackOfficeController::class,'backoffice'])->name('products');
Route::get('/backoffice/create', [BackOfficeController::class,'create']);
Route::post('/backoffice/create',[BackOfficeController::class,'store'])->name('product.create');
Route::get('/backoffice/product/{id}/edit', [BackOfficeController::class,'backofficeproductedit']);
//Route::get('/backoffice/product', [BackOfficeController::class,'backofficeproduct']);

