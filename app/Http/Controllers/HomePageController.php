<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function  HomePage(){
        return view("home.HomePage");
     }
}
