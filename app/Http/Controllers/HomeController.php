<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        $categoris=Categorie::all();
        $commentaires=Commentaire::all();
        $auteurs = Auteur::all();
        $blogs = Blog::latest()->take(4)->get();
        return view('home', compact('produits','categoris','commentaires','auteurs','blogs'));
    }


}
