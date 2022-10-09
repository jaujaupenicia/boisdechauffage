<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retourne une lite paginée des article de la base 
        $articles = Article::paginate(15);
        if ($articles->currentPage() > $articles->lastPage()) {
            return Redirect::back();
        }
        return view("boutique", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Pour l'administrateur 
        return view("admin.produits.ajout_produits");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Pour l'administrateur 

        // dd($request);
        
        Article::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'en_promo' => $request->en_promo,
            'stock_dispo' => $request->stock_dispo,
            'prix_promo' => $request->prix_promo,
            'image_article' => request()->file('photo')->storeAs('public/images' . '/speciality__' . rand(), 'photo_speciality__'. rand(). '.' . request()->file('photo')->guessExtension() ),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect(Route('admin.login'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($articleId)
    {
        // Vue partagée selon le role client | Admin
        
        // Vue Réservée au client 
        $article = Article::find($articleId);
        $similars = Article::all()->random(3);
    
        return view("produit_detail", compact("article", "similars"));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        // Pour l'administrateur 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        // Pour l'administrateur 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        // Pour l'administrateur 
    }
}
