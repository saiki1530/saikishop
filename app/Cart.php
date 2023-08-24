<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Cart
{
    public function __construct()
    {
        if (!Session::has('cart')) {
            Session::put('cart', []);
        }
    }



    public function update($id_sp, $soluong)
    {
        $cart = Session::get('cart');

        // Logic to handle updating item quantity

        Session::put('cart', $cart);
    }

    public function remove($id_sp)
    {
        $cart = Session::get('cart');

        // Logic to handle removing items from the cart

        Session::put('cart', $cart);
    }

    public function getContent()
    {
        return Session::get('cart');
    }

    // Other methods for calculating totals, clearing cart, etc.
}
