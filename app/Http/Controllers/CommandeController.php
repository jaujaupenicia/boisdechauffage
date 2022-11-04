<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\EntrepriseInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrepriseInfos = EntrepriseInfo::find(1);

        $total = 0 ; 
        $remise = 40;
        $cart = session()->get('cart');
 
        if ($cart) {
            foreach($cart as $eltCart) {
              $total += $eltCart['quantity'] * $eltCart['price'];
            }
        } else {
            
          return view("charrette", compact("total", "remise", "entrepriseInfos"));
        }
        return view("checkout", compact("total", "remise", "entrepriseInfos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrepriseInfos = EntrepriseInfo::find(1);
        $contact = $entrepriseInfos->telephone;
        $client = Client::find(Auth::user()->id);
        $client->lancerCommande($request);
        // On est sensé envoyé un email
        return Redirect('https://wa.me/' . $contact);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        // La liste des commandes 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
