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
        $produits = Produit::where('id', '!=', $id)->where('categorie_id',$produit->categorie_id)->inRandomOrder()->take(4)->get();
        return view('shop-details', compact('id','produit','produits','id'));
    }

    public function index2()
    {
        $produits = Produit::paginate(20);
        $categorys = Categorie::all();

        return view('shop-default', compact('produits','categorys'));
    }


     public function indexRcherche($id_categorie = null, $search = null)
    {

        $produits = Produit::where('categorie_id',$id_categorie)->paginate(20);
        $categorys = Categorie::all();

        return view('shop-default', compact('produits','categorys','id_categorie','search'));
    }

      public function search(Request $request)
    {

        $search = $request->input('search');
        $produits = Produit::where('designation','like',$search)->paginate(20);
        $categorys = Categorie::all();
        return view('shop-default', compact('produits','categorys','search'));
    }
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            if($request->produits == null || count($request->produits) == 0) {
                return response()->json(['error' => 'Aucun produit fourni'], 400);
            }
            $commande=Commande::create([
                'date' => now(),
                'user_id' => auth()->user()->id ?? null,
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
    $produit = Favori::where('produit_id',$id)->where('user_id', auth()->user()->id)->first();
    if ($produit) {
        $produit->delete();
        return back()->with('success', 'Produit supprimé des favoris');
    }
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
           return response()->json(['success' => true, 'message' => 'Produit supprimé des favoris']);
       }
    return response()->json(['success' => false, 'message' => 'Produit non trouvé dans les favoris'], 404);
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



   public function getFavoris()
   {
       $favoris = Favori::where('user_id', auth()->user()->id)->get();
       $produits = [];
       foreach ($favoris as $favori) {
           $produit = Produit::find($favori->produit_id);
           if ($produit) {
               $produits[] = $produit;
           }
       }
       return response()->json([
              'favoris' => $produits,
              'count' => count($produits)
       ]);
   }
}
