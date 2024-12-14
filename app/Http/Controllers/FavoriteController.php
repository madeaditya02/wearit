<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function productFavorite()
    {
        $user = Auth::user();
        $favorites = $user->favorites;
        return view("product.FavoriteProduct", compact('favorites', 'user'));
    }

    public function addProduct(Request $request)
    {
        $data = $request->validate(['product' => 'required']);
        $product = Produk::where('id_produk', $data['product'])->get()->first();
        Auth::user()->favorites()->toggle([$product->id]);
        return redirect()->back();
    }
}
