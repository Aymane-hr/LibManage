<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Commande;
use App\Models\CommandeProduit;
use App\Models\Favori;
use App\Models\Produit;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $produits = Produit::where('id', '!=', $id)->where('categorie_id',$produit->categorie_id)->inRandomOrder()->take(4)->get();
        return view('shop-details', compact('id','designation', 'images','prix', 'isbn','category','produits','stock','id'));
    }

    public function index2()
    {
        $produits = Produit::paginate(12);
        $categorys = Categorie::all();

        return view('shop-default', compact('produits','categorys'));
    }


     public function indexRcherche($id_categorie = null, $search = null)
    {

        $produits = Produit::where('categorie_id',$id_categorie)->paginate(12);
        $categorys = Categorie::all();

        return view('shop-default', compact('produits','categorys','id_categorie','search'));
    }

      public function search(Request $request)
    {

        $search = $request->input('search');
        $produits = Produit::where('designation','like',$search)->paginate(12);
        $categorys = Categorie::all();
        return view('shop-default', compact('produits','categorys','search'));
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $commande=Commande::create([
                'date' => now(),
            ]);
            foreach($request->produits as $produit) {
                $produitModel = Produit::find($produit['id']);
                if ($produitModel) {
                    CommandeProduit::create([
                        'commande_id' => $commande->id,
                        'produit_id' => $produitModel->id,
                        'qte' => $produit['quantity'],
                        'prix_ht' => $produitModel->prix_ht,
                        'tva'=>20
                    ]);
                }
            }
            DB::commit();
            app('App\Http\Controllers\CartController')->clearCart();
            return response()->json(['message' => 'Produit created successfully'], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return response()->json(['error' => 'Failed to create produit'], 500);
        }
    }

   public function save($id){
    $favori=Favori::create([
        'produit_id'=>$id,
        'user_id'=>auth()->user()->id ?? null,
        'date'=>now(),
    ]);
    return back()->with('success', 'Produit ajouté aux favoris');
   }


   public function deleteFavori($id)
   {
       $favori = Favori::where('produit_id', $id)->where('user_id', auth()->user()->id)->first();
       if ($favori) {
           $favori->delete();
           return back()->with('success', 'Produit supprimé des favoris');
       }
       return back()->with('error', 'Produit non trouvé dans les favoris');
   }
   public function showFavoris()
   {
       $favoris = Favori::where('user_id', auth()->user()->id)->get();
       $produits = [];
       foreach ($favoris as $favori) {
           $produit = Produit::find($favori->produit_id);
           if ($produit) {
               $produits[] = $produit;
           }
       }
       return view('favoris', compact('produits'));
   }
}
