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
    public function index(Request $request){
        $search = $request->input('search');
        $semuaProduk = Produk::where('nama_produk', 'LIKE', "%$search%")->orderBy('created_at', 'desc')->paginate(10);
        return view("admin.ProductList", compact('semuaProduk'));
    }
    public function destroy($id){
        Produk::destroy($id);
        return redirect('/admin/product')->with('alert', ['icon' => 'success', 'title' => 'Delete Product', 'text' => 'Product deleted successfully']);
     }

     public function addProduct(){
        return view("/admin/addProduct");
     }

    public function addProductSubmit(Request $request){
        $data = $request->validate([
            'gambar_produk' => 'required',
            'nama_produk' => 'required|string',
            'deskripsi' => 'required|string',
            'category' => 'required',
            'ukuran' => 'required|string',
            'harga_produk' => 'required|numeric',
            // 'tersedia' => 'required|integer',
            'size' => 'required',
            'quantity' => 'required',
        ]);
        // dd($data);
        $i = -1;
        $produk = Produk::create([
            'id_produk' => Str::uuid(),
            'gambar_produk' => "",
            'nama_produk' => $data['nama_produk'],
            'deskripsi_produk' => $data['deskripsi'],
            'jenis_produk' => $data['category'],
            'harga_produk' => $data['harga_produk'],
        ]);
        $sizes = explode('_', strtoupper($data['ukuran']));
        $sizes = array_map(function ($size) use ($data, $produk, $i) {
            $i++;
            return [
                'id_produk' => $produk->id,
                'ukuran' => $size,
                'tersedia' => $data['quantity'][$i],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }, $data['size']);
        DB::table('ukuran_produk')->insert($sizes);
        // UkuranProduk::create([
        //     'id_produk' => $produk->id,
        //     'ukuran' => "M",
        //     'tersedia' => $data['tersedia'],
        // ]);
        $file = $request->file('gambar_produk');
        $extension = $file->getClientOriginalExtension();
        $path = $file->storeAs('product-img', "$produk->id_produk.$extension", 'public');
        $produk->gambar_produk = asset("storage/product-img/$produk->id_produk");
        $produk->save();
        return redirect('/admin/product')->with('alert', ['icon' => 'success', 'title' => 'Add Product', 'text' => 'Product created successfully']);
    }

    public function editProduct($id) {
        $produk = Produk::with('ukuranProduk')->where('id', $id)->get()->first();
        $ukuran = $produk->ukuranProduk->mapWithKeys(function ($item, $key) {
            return [$item->ukuran => $item->tersedia];
        });
        return view("admin.editProduct", compact('produk', 'ukuran'));
    }

    public function editProductSubmit(Produk $produk, Request $request){
        $data = $request->validate([
            // 'gambar_produk' => 'required',
            'nama_produk' => 'required|string',
            'deskripsi' => 'required|string',
            'ukuran' => 'required|string',
            'harga_produk' => 'required|numeric',
            'category' => 'required',
            // 'tersedia' => 'required|integer',
            'size' => 'required',
            'quantity' => 'required',
        ]);
        // dd($data);
        $produk->nama_produk = $data['nama_produk'];
        $produk->deskripsi_produk = $data['deskripsi'];
        $produk->harga_produk = $data['harga_produk'];
        $produk->jenis_produk = $data['category'];
        $file = $request->file('gambar_produk');
        if ($file) {
            // dd($file);
            $extension = $file->getClientOriginalExtension();
            $path = $file->storeAs('product-img', "$produk->id_produk.$extension", 'public');
            $produk->gambar_produk = asset("storage/product-img/$produk->id_produk.$extension");
        }
        $produk->save();
        DB::table('ukuran_produk')->where('id_produk', $produk->id)->delete();
        $i = -1;
        $sizes = explode('_', strtoupper($data['ukuran']));
        $sizes = array_map(function ($size) use ($data, $produk, $i) {
            $i++;
            return [
                'id_produk' => $produk->id,
                'ukuran' => $size,
                'tersedia' => $data['quantity'][$i],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }, $data['size']);
        DB::table('ukuran_produk')->insert($sizes);
        return redirect('/admin/product')->with('alert', ['icon' => 'success', 'title' => 'Edit Product', 'text' => 'Product updated successfully']);
    }
}

