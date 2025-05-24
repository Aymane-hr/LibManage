<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Cart;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function addToCart(Request $request)
    {
        $this->cart->add(
            $request->id,
            $request->designation,
            $request->prix,
            $request->qty,
            $request->image
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
