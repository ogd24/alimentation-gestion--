<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\afficherController;
use App\Http\Controllers\editController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Models\product;
use Illuminate\Database\Capsule\Manager;
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

Route::get('/', function () {
    return view('welcome');
});
route::get('register',[RegisterController::class,'registerVue'])->name('registration');
route::post('register',[RegisterController::class,'register'])->name('regist');
Route::get('/login',[loginController::class,"connexion"])->name('Admin_log');
Route::post('/login',[loginController::class,"login"])->name('logAdmin');
//manageur
Route::get('/add_manager',[ManagerController::class, "add"])->name('ajout');
Route::post('/add_manager',[ManagerController::class, "manage"])->name('manageur');
Route::get('/index',[ManagerController::class, "index"])->name('index');



Route::get('/product_register',[ProductController::class,"produit"])->name('ProductVue');
Route::post('product_store',[ProductController::class,"product"])->name('productPost');
Route::delete('supprimer',[ProductController::class,"supprimer"])->name('supprimer');

Route::get('aficher',[afficherController::class,"afficherProduit" ])->name('afficher');

//edit
Route::get('modifier',[editController::class,"modifier" ])->name('modifier');
Route::post('editProduct',[editController::class,"edit" ])->name('editProduct');

// Route::get('acceuil' ,[afficherController::class,"acceuil" ])->name('home');
Route::delete('acceuil',[afficherController::class,"afficherProduit"])->name('acceuil');
