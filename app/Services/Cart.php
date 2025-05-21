<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class Cart
{
    protected $cartKey = 'cart';

    public function add($id, $name, $price, $quantity = 1, $image = null)
    {
        $cart = Session::get($this->cartKey, []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'image'=>$image
            ];
        }

        Session::put($this->cartKey, $cart);
    }

    public function remove($id)
    {
        $cart = Session::get($this->cartKey, []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put($this->cartKey, $cart);
        }
    }

    public function clear()
    {
        Session::forget($this->cartKey);
    }

    public function getCart()
    {
        return Session::get($this->cartKey, []);
    }

    public function totalForOne($id)
    {
        $cart = Session::get($this->cartKey, []);

        if (isset($cart[$id])) {
            return $cart[$id]['price'] * $cart[$id]['quantity'];
        }

        return 0;
    }

    public function total()
    {
        $cart = Session::get($this->cartKey, []);
        return array_reduce($cart, fn($sum, $item) => $sum + ($item['price'] * $item['quantity']), 0);
    }
}
