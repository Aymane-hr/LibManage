<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $produit = Produit::find($id);
        if (!$produit) {
            abort(404);
        }
        $designation = $produit->designation;
        $images = $produit->images;
        $prix = $produit->prix_ht;
        $isbn = $produit->isbn;
        $category= $produit->categorie->categorie;
        $stock = $produit->stock;
        $produits = Produit::where('id', '!=', $id)->inRandomOrder()->take(4)->get();
        return view('shop-details', compact('id','designation', 'images','prix', 'isbn','category','produits','stock','id'));
    }

    public function index2()
    {
        $produits = Produit::paginate(10);
        $categorys = Categorie::all();

        return view('shop-default', compact('produits','categorys'));
    }


     public function indexRcherche($id_categorie = null, $search = null)
    {

        $produits = Produit::where('categorie_id',$id_categorie)->paginate(10);
        $categorys = Categorie::all();

        return view('shop-default', compact('produits','categorys','id_categorie','search'));
    }

      public function search(Request $request)
    {

        $search = $request->input('search');
        $produits = Produit::where('designation','like',$search)->paginate(10);
        $categorys = Categorie::all();
        return view('shop-default', compact('produits','categorys','search'));
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
        try {
            $commande=Command::create([
                'produit_id' => $request->input('produit_id'),
                'quantite' => $request->input('quantite'),
                'prix' => $request->input('prix'),
                'client_id' => $request->input('client_id'),
            ]);
            return response()->json(['message' => 'Produit created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create produit'], 500);
        }
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
