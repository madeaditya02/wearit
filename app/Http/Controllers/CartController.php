<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view("product.Cart");
    }

    public function Address()
    {
        return view("cart.Address");
    }

    public function Shipping()
    {
        return view("cart.Shipping");
    }

    public function Payment()
    {
        return view("cart.Payment");
    }
}
