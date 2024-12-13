<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class FavoriteController extends Controller
{
    public function productFavorite()
    {
        $favorites = User::find(2)->favorites;
        return view("product.FavoriteProduct", compact('favorites'));
    }

    public function addProduct(Request $request)
    {
        $data = $request->validate(['product' => 'required']);
        $product = Produk::where('id_produk', $data['product'])->get()->first();
        User::find(2)->favorites()->toggle([$product->id]);
        return redirect()->back();
    }
}
