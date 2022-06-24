<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvproducter within a group which
| contains the "web" mproductdleware group. Now create something great!
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

Route::get('/product',[ProductController::class,'products'])->name('product.index');

//Route::get('/product/{product}', function (int $product) {
//    return 'Fiche du produit '. $product;
//});

Route::get('/product/{product}', [ProductController::class,'show'])->name('product.show');

//Route::get('/cart', function () {
//    return 'Panier';
//});

Route::get('/cart', [CartController::class,'cart']);

//Redirect::action('PageController@about');
//Config::get('app.aliases.Cookie');

Route::get('/backoffice', [\App\Http\Controllers\BackOfficeController::class,'backoffice'])->name('backoffice.index');

Route::get('/backoffice/create', [\App\Http\Controllers\BackOfficeController::class,'create'])->name('backoffice.create');

Route::post('/backoffice', [\App\Http\Controllers\BackOfficeController::class,'store'])->name('backoffice.store');

Route::GET('/backoffice/{product}/edit', [\App\Http\Controllers\BackOfficeController::class,'edit'])->name('backoffice.edit');

Route::PUT('/backoffice/{product}', [\App\Http\Controllers\BackOfficeController::class,'update'])->name('backoffice.update');

Route::DELETE('/backoffice/{product}', [\App\Http\Controllers\BackOfficeController::class,'destroy'])->name('backoffice.destroy');

Route::get('/categorie', [\App\Http\Controllers\CategoriesController::class,'index'])->name('categorie.index');
