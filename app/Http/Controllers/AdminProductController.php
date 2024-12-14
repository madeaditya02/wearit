<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\UkuranProduk;

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

     public function addProduct(){
        return view("/admin/addProduct");
     }

     public function addProductSubmit(Request $request){
        $data = $request->validate([
            'gambar_produk' => 'required|max:2048',
            'nama_produk' => 'required|string',
            'deskripsi' => 'required|string',
            //'ukuran' => 'required|string',
            'harga_produk' => 'required|numeric',
            'tersedia' => 'required|integer',
        ]);
        $produk = Produk::create([
            'id_produk' => Str::uuid(),
            'gambar_produk' => "",
            'nama_produk' => $data['nama_produk'],
            'deskripsi_produk' => $data['deskripsi'],
            'harga_produk' => $data['harga_produk'],
        ]);
        UkuranProduk::create([
            'id_produk' => $produk->id,
            'ukuran' => "M",
            'tersedia' => $data['tersedia'],
        ]);
        $path = $request->file('gambar_produk')->storeAs('product-img', "$produk->id_produk", 'public');
        $produk->gambar_produk = asset("storage/product-img/$produk->id_produk");
        $produk->save();
        return redirect('/admin');
     }

}

