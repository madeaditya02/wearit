<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // public function DetailProduct(){
    //     return view("detailproduct");
    // }
    public function index()
    {
        return view('home');
    }
}
