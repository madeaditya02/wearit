<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $semuaProduk = Produk::where('nama_produk', 'LIKE', "%$search%")->paginate(10);
        return view("admin.ProductList", compact('semuaProduk'));
    }
    public function destroy($id){
        Produk::destroy($id);
        return redirect('/admin/product')->with('alert', ['icon' => 'success', 'title' => 'Product', 'text' => 'Product deleted successfully']);
    }
}

