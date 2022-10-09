<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    // Cette fonction gère la page d'accueil

    public function echauffageHomeManager() {

     // Nos produits (Charge les trois dernieres produits)
     $last_articles = Article::orderBy('created_at','DESC')->take(3)->get();

     // Le produit à l'honneur
     // $honnor_article = Article::find(rand(1, count(Article::all())));
     $honnor_article = Article::all()->random();

     // Charger les dernieres BlogPosts
     // $last_blogpost = BlogPost::orderBy('created_at','DESC')->take(3)->get();

     return view('welcome', compact("last_articles", "honnor_article"));

    }


}
