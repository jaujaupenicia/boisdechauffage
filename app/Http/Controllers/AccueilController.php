<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\EntrepriseInfo;

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
     $entrepriseInfos = EntrepriseInfo::find(1);
     
     return view('welcome', compact("last_articles", "honnor_article", "entrepriseInfos"));

    }


    // Cette fonction gère la page d'accueil

    public function faq() {

        $entrepriseInfos = EntrepriseInfo::find(1);
        return view("faq", compact("entrepriseInfos"));

    }



        // Cette fonction gère la page d'accueil

    public function contact() {

        $entrepriseInfos = EntrepriseInfo::find(1);
        return view("contact", compact('entrepriseInfos'));

    }

}
