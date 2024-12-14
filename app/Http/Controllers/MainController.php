<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $products = DB::table('produk')->leftJoin('detail_transaksi', 'produk.id', '=', 'detail_transaksi.id_produk')
         ->select('produk.*', DB::raw('SUM(detail_transaksi.quantity) as total_terjual'))
         ->groupBy('produk.id')
         ->orderBy('total_terjual', 'desc')
         ->limit(8)->get();
        $discounts = Diskon::with('produk')->where('waktu_mulai', '<=', now())->where('waktu_akhir', '>=', now())->get();
        return view('home', compact('products', 'discounts'));
    }
}
