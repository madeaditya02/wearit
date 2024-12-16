<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function cekOngkir(Request $request)
    {
        $destination = $request->input('destination');
        $origin = $request->input('origin');
        $weight = $request->input('weight');
        $courier = $request->input('courier');
        $response = Http::post('https://api.rajaongkir.com/starter/cost', [
            'key' => '4c78d927c71f660f7df5adb36d7a9aff',
            'origin' => $origin,
            'destination' => $destination,
            'courier' => $courier,
            'weight' => $weight
        ]);
        $costs = collect($response->object()->rajaongkir->results[0]->costs);
        // $cost = $costs->first(function ($c) {
        //     return $c->service == 'REG';
        // });
        // dd($cost);
        return response()->json($costs);
        // dd($response->object()->rajaongkir->results[0]->costs);
    }

    public function midtransSnapToken(Request $request)
    {
        $total_harga = $request->input('total_harga');
        $user = Auth::user();
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-8zUze__nJ8Fv-1IsMDri73yQ';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => intval($total_harga),
            ),
            'customer_details' => array(
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'phone' => $user->phone_number,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return response()->json(['token' => $snapToken]);
    }
    public function newTransaction(Request $request)
    {
        $id_alamat = $request->input('id_alamat');
        $ongkir = $request->input('ongkir');
        $courier = $request->input('courier');
        $cart = Auth::user()->keranjang()->with('diskon')->get();
        if ($cart->count() > 0) {
            $products = $cart->map(function ($item) {
                return [$item->id => ['quantity' => $item->pivot->quantity]];
            });
            // $total_harga = $cart->sum(function ($k) {
            //     return $k->pivot->quantity * $k->harga_produk;
            // });
            $total_harga = $cart->sum(function ($k) {
                $harga = $k->pivot->quantity * $k->harga_produk;
                return $k->diskon->count() ? $harga - ($harga * $k->diskon[0]->jumlah_diskon / 100) : $harga;
            });
            $transaksi = Transaksi::create([
                'id_user' => 2,
                'waktu_transaksi' => now(),
                'estimasi_total' => $total_harga,
                'ongkir' => $ongkir,
                'total_harga' => $total_harga + $ongkir,
                'jenis_pengantaran' => $courier,
                'status_transaksi' => 'processing',
                'id_alamat' => $id_alamat,
            ]);
            // $transaksi->produk()->createMany($cart->map(fn($c) => [
            //     'id_produk' => $c->id,
            //     'size_produk' => $c->pivot->size,
            //     'quantity' => $c->pivot->quantity,
            // ]));
            DB::table('detail_transaksi')->insert($cart->map(fn($c) => [
                'id_transaksi' => $transaksi->id_transaksi,
                'id_produk' => $c->id,
                'size_produk' => $c->pivot->size,
                'quantity' => $c->pivot->quantity,
                'id_diskon' => $c->diskon->count() ? $c->diskon[0]->id_diskon : null
            ])->all());
            // $ids = $cart->pluck('id');
            // $sizes = $cart->map(fn($c) => $c->pivot->size);
            // dd($ids, $sizes);
            // DB::table('ukuran_produk')->whereIn('id_produk', $ids)->whereIn('ukuran', $sizes)->decrement('tersedia');
            $cart->each(function ($produk) {
                DB::table('ukuran_produk')->where('id_produk', $produk->id)->where('ukuran', $produk->pivot->size)->decrement('tersedia', $produk->pivot->quantity);
            });
            DB::table('keranjang')->delete();
            // $transaksi->produk()->attach($products);
            return response()->json(['success' => true]);
        }
    }
}
