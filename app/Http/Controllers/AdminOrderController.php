<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function OrderAdmin(Request $request) {
        $search = $request->only('search');
        $dataTransaksi = Transaksi::with('user');
        if ($search) {
            $dataTransaksi = $dataTransaksi->where('id_transaksi', $search)->orderBy('waktu_transaksi', 'desc')->paginate(10);
            $dataTransaksi->appends(['search' => $search]);
        } else {
            $dataTransaksi = $dataTransaksi->orderBy('waktu_transaksi', 'desc')->paginate(10);
        }
        return view('admin.OrderManagement', compact('dataTransaksi'));
    }
    
    public function updateStatus(Request $request) {
        $data = $request->validate(['id' => 'required', 'status' => 'required']);
        DB::table('transaksi')->where('id_transaksi', $data['id'])->update(['status_transaksi' => $data['status']]);
        return redirect('/admin/order');
    }
}
