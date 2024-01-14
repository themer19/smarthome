<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about']);
Route::get('/Equip', [App\Http\Controllers\IndexController::class, 'Equip']);
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact']);



//Route tech
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/Techniciens',[App\Http\Controllers\TechniciensController::class , 'index'])->middleware('is_admin');
Route::post('/ajoutertech',[App\Http\Controllers\TechniciensController::class , 'store'])->middleware('is_admin');
Route::put('/updatetech/{id}',[App\Http\Controllers\TechniciensController::class , 'update'])->middleware('is_admin');
Route::delete('/deletetech/{id}',[App\Http\Controllers\TechniciensController::class , 'destroy'])->middleware('is_admin');



 
//Route equi
Route::get('/Equipement',[App\Http\Controllers\EquipementController::class , 'index'])->middleware('is_admin');
Route::post('/ajoutereq',[App\Http\Controllers\EquipementController::class , 'store'])->middleware('is_admin');
Route::put('/updateeq/{id}',[App\Http\Controllers\EquipementController::class , 'update'])->middleware('is_admin');
Route::delete('/deleteeq/{id}',[App\Http\Controllers\EquipementController::class , 'destroy'])->middleware('is_admin');

//  
Route::get('/search', [App\Http\Controllers\ClientController::class, 'search'])->name('home');

Route::get('/equipementcl', [App\Http\Controllers\ClientController::class, 'Equipement'])->name('home');
Route::get('/technicienscl', [App\Http\Controllers\ClientController::class, 'techniciens'])->name('home');
Route::get('/reclamation', [App\Http\Controllers\IndexController::class, 'reclamation'])->middleware('home');


//ClientAdmin 
Route::get('/ClientAdmin', [App\Http\Controllers\ClientAdminController::class, 'index'])->middleware('is_admin');
Route::delete('/deletecli/{id}',[App\Http\Controllers\ClientAdminController::class , 'destroy'])->middleware('is_admin');


Route::get('/cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'showCart'])->name('cart');
 
Route::post('/add-to-cart',[App\Http\Controllers\CartController::class,'addToCart']) ;
Route::get('/cart', [App\Http\Controllers\CartController::class, 'showCart']);

Route::post('/add-to-cart', 'CartController@addToCart')->name('cart.add');
Route::post('/update-cart', 'CartController@updateCart')->name('cart.update');
Route::post('/remove-from-cart', 'CartController@removeFromCart')->name('cart.remove');

Route::get('/', function () {
    return view('welcome');
});
