<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function DetailProduct() {
        return view("detailproduct.DetailProduct");
    }
}
