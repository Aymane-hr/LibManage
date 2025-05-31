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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
