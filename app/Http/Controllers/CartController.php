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
        return view("address.Address");
    }

    public function Shipping()
    {
        return view("shipping.Shipping");
    }

    public function Payment()
    {
        return view("shipping.Payment");
    }
}
