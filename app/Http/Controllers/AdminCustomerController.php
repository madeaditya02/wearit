<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function  CustomerAll(){
        return view("admin.CustomerAll");
    }
}
