<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alamat;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $cart = Auth::user()->keranjang()->with('diskon')->get();
        $discounts = $cart->pluck('diskon')->flatten();
        $estimasi_total = $cart->sum(function ($k) {
            return $k->pivot->quantity * $k->harga_produk;
        });
        $total_harga = $cart->sum(function ($k) {
            $harga = $k->pivot->quantity * $k->harga_produk;
            return $k->diskon->count() ? $harga - ($harga * $k->diskon[0]->jumlah_diskon / 100) : $harga;
        });
        // dd($total_harga);
        return view("cart.ProductDisplay", compact('cart', 'estimasi_total', 'total_harga', 'discounts'));
    }

    public function Address()
    {
        return view("cart.Address");
    }

    public function Shipping()
    {
        return view("cart.Shipping");
    }

    public function checkout()
    {
        $addresses = auth()->user()->alamat;
        $cart = Auth::user()->keranjang;
        if ($cart->count() == 0) {
            return redirect('/cart');
        }
        $discounts = $cart->pluck('diskon')->flatten();
        $estimasi_total = $cart->sum(function ($k) {
            return $k->pivot->quantity * $k->harga_produk;
        });
        $total_harga = $cart->sum(function ($k) {
            $harga = $k->pivot->quantity * $k->harga_produk;
            return $k->diskon->count() ? $harga - ($harga * $k->diskon[0]->jumlah_diskon / 100) : $harga;
        });
        // dump($addresses);
        return view("cart.checkout2", compact('addresses', 'cart', 'estimasi_total', 'discounts', 'total_harga'));
    }

    public function Payment()
    {
        return view("cart.Payment");
    }

    public function updateQuantity(Request $request)
    {
        $data = $request->validate(['quantity' => 'required', 'produk' => 'required']);
        [$data['produk'], $data['size']] = explode('-', $data['produk']);
        DB::table('keranjang')->where('id_produk', $data['produk'])->where('size', $data['size'])->update(['quantity' => $data['quantity']]);
        return redirect('/cart');
    }
    public function deleteItem(Request $request)
    {
        $data = $request->validate(['produk' => 'required']);
        [$data['produk'], $data['size']] = explode('-', $data['produk']);
        DB::table('keranjang')->where('id_produk', $data['produk'])->where('size', $data['size'])->delete();
        return redirect('/cart');
    }

    public function addProduct(Request $request)
    {
        $data = $request->validate(['product' => 'required', 'size' => 'required']);
        $produk = Produk::where('id_produk', $data['product'])->get()->first();
        $exist = DB::table('keranjang')->where('id_user', auth()->id())->where('id_produk', $produk->id)->where('size', $data['size'])->get();
        if ($exist->count()) {
            DB::table('keranjang')->where('id_user', auth()->id())->where('id_produk', $produk->id)->where('size', $data['size'])->update(['quantity' => $exist[0]->quantity + 1]);
        } else {
            DB::table('keranjang')->insert([
                'id_user' => auth()->id(),
                'id_produk' => $produk->id,
                'quantity' => 1,
                'size' => $data['size'],
            ]);
        }
        session()->flash('alert', ['icon' => 'success', 'title' => 'Success', 'text' => 'Product successfully added to cart']);
        return redirect("/cart");
    }
}
