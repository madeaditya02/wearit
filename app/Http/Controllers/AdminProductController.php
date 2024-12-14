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

     public function addProduct(){
        return view("/admin/addProduct");
     }

     public function addProductSubmit(Request $request){
        $data = $request->validate([
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_produk' => 'required|string',
            'deskripsi' => 'required|string',
            'ukuran' => 'required|string',
            'harga_produk' => 'required|numeric',
            'tersedia' => 'required|integer',
        ]);
        Produk::create([
            'gambar_produk' => $data['gambar_produk'],
            'nama_produk' => $data['nama_produk'],
            'deskripsi' => $data['deskripsi'],
            'ukuran' => $data['ukuran'],
            'harga_produk' => $data['harga_produk'],
            'tersedia' => $data['tersedia'],
        ]);
        $path = $request->file('gambar_produk')->store('gambar_produk');
        return back()->with('success', 'Items added successfully')->with('path',$path);
     }

}

