<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function OrderAdmin (){
        return view('admin.OrderManagement');
    }
}
