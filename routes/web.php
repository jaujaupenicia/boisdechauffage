<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EntrepriseController;
use App\Models\Client;
use App\Models\EntrepriseInfo;

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

// Route::get('/redirect-by-role', function() {
//     $user = Client::find(Auth::user()->getAuthIdentifier());
//     $routeTarget = null;
//     $user->isAdmin ? $routeTarget = "admin.dashboad"  :  $routeTarget = "home" ;
//     return redirect()->intended(Route($routeTarget));
// })->middleware(['auth', 'verified'])->name('roleRedirector');


Route::get('/', [AccueilController::class, "echauffageHomeManager"])->name("home");

Route::get('/boutique', [ArticleController::class, "index"])->name("shop");

Route::get('/detail/{produit}', [ArticleController::class, "show"])->name("detail.produit");

Route::resource('article', ArticleController::class)->only([ 'create', 'store', 'edit' ,'update', 'destroy']);

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

Route::get('/faq', [AccueilController::class, "faq"])->name("faq");

Route::get('/contactez-nous', [AccueilController::class, "contact"])->name("contact");

Route::get('/e-chauffage-pro/admin/login', [AdminController::class, "loginAdmin"])->name('admin.login');

Route::get('/e-chauffage-pro/admin', [AdminController::class, "entryAdmin"])->name('admin.dashboad');

Route::get('/e-chauffage-pro/admin/list-produits', [AdminController::class, "listProduct"])->name("admin.product.list");

Route::get('/e-chauffage-pro/admin/list-commandes', [AdminController::class, "listCommandes"])->name("admin.commande.list");

Route::get('/e-chauffage-pro/admin/list-clients', [AdminController::class, "listClients"])->name("admin.client.list");

Route::resource('/e-chauffage-pro/admin/entreprise', EntrepriseController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
