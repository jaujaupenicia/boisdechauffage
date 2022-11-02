<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\EntrepriseInfo;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\EventDispatcher\EventDispatcher;

class PanierController extends Controller
{

    public function __construct(Session $session, EventDispatcher $events)
    {
        $this->session =  $session->start();
        $this->events = $events;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $total = 0 ; 
       $remise = 40;
       $cart = session()->get('cart');
       $entrepriseInfos = EntrepriseInfo::find(1);


       if ($cart) {
           foreach($cart as $eltCart) {
             $total += $eltCart['quantity'] * $eltCart['price'];
           }
       }
        
       return view("charrette", compact("total", "remise","entrepriseInfos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Article::findOrFail($request->id);

        if ($product->stock_dispo > 0 ) {

            $cart = session()->get('cart');

            // Création et Initialisation du panier
            if(!$cart) {
                $cart = [
                    $request->id => [
                        "name" => $product->nom,
                        "quantity" => $request->quantity,
                        "price" => $product->prix,
                        "photo" => $product->image_article
                    ]
                ];

                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }

            // Incrementer et rediriger lorsque le produit est deja dans le panier
            if(isset($cart[$request->id])) {
                $cart[$request->id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }

            // Ajout d'un nouvel element au panier 
            $cart[$request->id] = [
                "name" => $product->nom,
                "quantity" => $request->quantity,
                "price" => $product->prix,
                "photo" => $product->image_article
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
