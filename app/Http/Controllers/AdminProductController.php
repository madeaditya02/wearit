<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function  ProductList(Request $request){
        $search = $request->input('search');
        $semuaProduk = Produk::where('nama_produk', 'LIKE', "%$search%")->paginate(5);
        return view("admin.ProductList", compact('semuaProduk'));
     } public function HapusProduct($id){
        Produk::destroy($id);
        return redirect('/admin/product');
     }

}

