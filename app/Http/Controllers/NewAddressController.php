<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewAddressController extends Controller
{
    public function  NewAddress(){
        return view("newaddress.NewAddress");
    }
}
