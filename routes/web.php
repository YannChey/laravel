<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\backoffController;

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
//Route::get('/productName',[ProductController::class,'productsSortByName']);
//Route::get('/productPrice',[ProductController::class,'productsSortByPrice']);

Route::get('/product/name',[ProductController::class,'nameOrder']);

Route::get('/product/price',[ProductController::class,'priceOrder']);

//Route::get('/product/{id}', function (int $id) {
//    return 'Fiche du produit '. $id;
//});

Route::get('/product/{id}', [ProductController::class,'id']);

//Route::get('/cart', function () {
//    return 'Panier';
//});



//Redirect::action('PageController@about');
//Config::get('app.aliases.Cookie');

Route::get('/backoffice', [backofficeClass::class,'backoffice']);


// Route::get('/backoffice/create', [BackOfficeController::class,'create']);
// Route::post('/backoffice/create',[BackOfficeController::class,'store'])->name('product.create');
// Route::get('/backoffice/product/{product}/edit', [BackOfficeController::class,'edit'])->name('product.edit');
// Route::put('/backoffice/product/{product}/edit', [BackOfficeController::class,'update'])->name('product.update');
// Route::delete('/backoffice/{product}',[BackOfficeController::class,'destroy'])->name('product.delete');
// //Route::get('/backoffice/product', [BackOfficeController::class,'backofficeproduct']);

// Route::get('/backoffice/categories',[BackOfficeController::class,'showcategories'])->name('products.category');
// Route::get('/backoffice/orders',[BackOfficeController::class,'showorders'])->name('orders');
