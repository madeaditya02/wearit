<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      $price_range = [
         '<10.0' => '< $20.0',
         '20.0-50.0' => '$20.0 - $50.0',
         '50.0-80.0' => '$50.0 - $80.0',
         '>80.0' => '$80.0 >',
      ];
      $filters = collect($request->all());
      $filters['sizes'] = collect(explode('_', $filters['sizes'] ?? ''));
      $filters['category'] = collect($filters['category'] ?? []);
      $filters['prices'] = collect($filters['prices'] ?? []);
      return view("product.ProductDisplay", compact('categories', 'sizes', 'price_range', 'filters'));
   }
   public function display()
   {
      return view("product.display");
   }

   public function DetailProduct()
   {
      return view("product.DetailProduct");
   }

   public function ProductFavorite()
   {
      return view("product.FavoriteProduct");
   }
   public function cartDisplay()
   {
      return view("cart.ProductDisplay");
   }
}
