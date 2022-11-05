<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Article;
use App\Models\Commande;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    // Retourne la page d'identification de l'admin

    public function loginAdmin()
    {
        return view('admin.admin-auth');
    }

    // Retourne la page d'accueil du dashboard

    public function entryAdmin()
    {
      
        if (!Gate::allows("admin-access")) {
           return redirect()->intended(Route("home"));
        }

        $commandes = Commande::all()->take(6);
        return view('admin.admin_dashbord', compact('commandes'));
    }

    // Retourne la liste des produits pour l'admin

    public function listProduct()
    {
            
        if (!Gate::allows("admin-access")) {
            return redirect()->intended(Route("home"));
        }

        $produits = Article::all();
        return view('admin.produits.admin_list_produits', compact('produits'));
    }

    // Retourne la liste des commandes pour l'admin

    public function listCommandes()
    {
            
        if (!Gate::allows("admin-access")) {
            return redirect()->intended(Route("home"));
        }

        $commandes = Commande::all();
        return view('admin.commande.list_commande', compact('commandes'));
    }

    // Retourne la liste des clients pour l'admin

    public function listClients()
    {
            
        if (!Gate::allows("admin-access")) {
            return redirect()->intended(Route("home"));
        }

        $clients = Client::all();
        return view('admin.clients.list_clients', compact('clients'));
    }

}
