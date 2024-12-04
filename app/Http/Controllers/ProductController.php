<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function  ProductDisplay()
   {
      return view("product.ProductDisplay");
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
