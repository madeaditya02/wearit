<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDiscountController extends Controller
{
    public function  Diskon(){
        return view("admin.Diskon");
    }
}
