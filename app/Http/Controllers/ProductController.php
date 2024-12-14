<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   public function  ProductDisplay(Request $request)
   {
      $categories = [
         'dresses' => 'Dresses',
         'skirts' => 'Skrits',
         'shorts' => 'Shorts',
         'basics' => 'Basics',
         'shirts-blouses' => 'Shirts & Blouses',
         'outerwear' => 'Outerwear',
         'knitwear' => 'Knitwear',
      ];
      $sizes = ['xs', 's', 'm', 'l', 'xl', '2x'];
      // $price_range = [
      //    '<10.0' => '< $20.0',
      //    '20.0-50.0' => '$20.0 - $50.0',
      //    '50.0-80.0' => '$50.0 - $80.0',
      //    '>80.0' => '$80.0 >',
      // ];
      $filters = collect($request->all());
      $filters['sizes'] = collect(explode('_', $filters['sizes'] ?? ''))->filter(fn($s) => $s != "")->values();
      $filters['category'] = collect($filters['category'] ?? []);
      // $filters['prices'] = collect($filters['prices'] ?? []);
      $filters['min_price'] = $filters['min_price'] ?? null;
      $filters['max_price'] = $filters['max_price'] ?? null;
      $search = $filters['search'] ?? '';
      // dump($filters);
      $products = Produk::where('nama_produk', 'LIKE', "%$search%");
      if ($filters['sizes']->count()) {
         $products = $products->whereHas('ukuranProduk', function ($query) use ($filters) {
            $query = $query->where(function ($query) use ($filters) {
               $query->where('ukuran', Str::upper($filters['sizes'][0]))->where('tersedia', '>', 0);
            });
            for ($i = 1; $i < $filters['sizes']->count(); $i++) {
               $query = $query->orWhere(function ($query) use ($filters) {
                  $query->where('ukuran', Str::upper($filters['sizes'][0]))->where('tersedia', '>', 0);
               });
            }
            return $query;
         });
      }
      if ($filters['category']->count()) {
         $products = $products->where(function ($query) use ($filters) {
            $query->where('jenis_produk', $filters['category'][0]);
            for ($i = 1; $i < $filters['category']->count(); $i++) {
               $query = $query->orWhere('jenis_produk', $filters['category'][$i]);
            }
            return $query;
         });
      }
      if ($filters['min_price'] ?? null)
         $products = $products->where('harga_produk', '>=', $filters['min_price']);
      if ($filters['max_price'] ?? null)
         $products = $products->where('harga_produk', '<=', $filters['max_price']);
      // dump($products->get());
      $products = $products->get();
      return view("product.ProductDisplay", compact('categories', 'sizes', 'filters', 'products'));
   }
   public function display()
   {
      return view("product.display");
   }

   public function DetailProduct($id_produk)
   {
      $produk = Produk::where('id_produk', $id_produk)->get()->first();
      $favorited = DB::table('favorites')->where('id_user', auth()->id())->where('id_produk', $produk->id)->count();
      return view("product.DetailProduct", compact('produk', 'favorited'));
   }

   public function cartDisplay()
   {
      return view("cart.ProductDisplay");
   }
}
