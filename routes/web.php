<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackofficeController;

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

Route::get('/backoffice', [BackofficeController::class,'index'])->name('backoffice.index');
// Route::get('/backoffice/{product}', [BackofficeController::class,'show']);
// Route::get('/backoffice/create', [BackofficeController::class,'create']);
// Route::post('/backoffice', [BackofficeController::class,'store']);
Route::get('/backoffice/{product}/edit', [BackofficeController::class,'edit']);
Route::put('/backoffice/{product}/update', [BackofficeController::class,'update'])->name('backoffice.update');
// Route::delete('/backoffice/{product}', [BackofficeController::class,'destroy']);
