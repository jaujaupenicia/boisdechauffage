<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;

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

Route::get('/', [AccueilController::class, "echauffageHomeManager"])->name("home");

Route::get('/boutique', [ArticleController::class, "index"])->name("shop");

Route::get('/detail/{produit}', [ArticleController::class, "show"])->name("detail.produit");

Route::resource('article', ArticleController::class)->only(['store', 'update', 'destroy']);

Route::post('/ajouter-au-panier', 
[PanierController::class, "store"])->middleware(['auth', 'verified'])->name("panier");

Route::get('/mon-panier', 
[PanierController::class, "index"])->middleware(['auth', 'verified'])->name("charrette");

Route::resource('panier', PanierController::class)->only(['index', 'destroy']);

Route::get('/lancer-commande', 
[CommandeController::class, "create"])->middleware(['auth', 'verified'])->name("checkout");

Route::resource('panier', PanierController::class)->only(['index', 'destroy']);

Route::resource('commande', CommandeController::class)->only(['index', 'store', 'update', 'destroy']);

Route::get('/creer-mon-compte', function(){ return view("register_client");})->name("register");

Route::get('/single-blog', function(){ return view("single_blogpost"); })->name("blogpost");

Route::get('/faq', function(){ return view("faq"); })->name("faq");

Route::get('/contactez-nous', function(){ return view("contact");})->name("contact");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
