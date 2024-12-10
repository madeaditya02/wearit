<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterPayController extends Controller
{
    public function  AfterPay(){
        return view("shipping.AfterPay");
    }
}
