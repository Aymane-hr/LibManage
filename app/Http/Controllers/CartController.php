<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Services\Cart;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function addToCart(Request $request,$id)
    {
        $product = Produit::find($id);
        $qty = $request->input('qty', 1); // Default quantity to 1 if not provided
        $image = $product->images->first()->image ?? null;
        if (!$product) {
            return back()->with('error', 'Produit non trouvé');
        }
        $this->cart->add(
            $product->id,
            $product->designation,
            $product->prix_ht,
            $qty,
            $image
        );


        return back()->with('message', 'Produit ajouté au panier');
    }

    public function removeFromCart($id)
    {
        // dd($id);
        $r=$this->cart->remove($id);
        // dd($r);
return response()->json(['message' => 'Item removed from cart successfully']);
    }

    public function clearCart()
    {
        $this->cart->clear();
        return response()->json(['message' => 'Panier vidé']);
    }

    public function viewCart()
    {
        return response()->json($this->cart->getCart());
    }

    public function index(){
        $cart = $this->cart->getCart();
        $total = $this->cart->total();
        return view('shop-cart', compact('cart', 'total'));
    }
}
