<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $semuaTransaksi = Transaksi::with('user')->orderBy('waktu_transaksi')->get();
        $totalSales = $semuaTransaksi->sum('total_harga');
        $thisMonth = now()->startOfMonth();
        $salesMonths = [];
        for ($i=0; $i < 6; $i++) { 
            $month = $thisMonth->copy()->subMonths($i);
            $transactionMonth = $semuaTransaksi->filter(fn($transaksi) => $transaksi->waktu_transaksi >= $month->copy()->subMonth() && $transaksi->waktu_transaksi < $month);
            if ($transactionMonth->count() < 1) {
                if ($i == 0) {
                    $salesMonths[$i] = [$month->format('F'), null];
                    $salesMonths[$i][1] = $semuaTransaksi->filter(fn($transaksi) => $transaksi->waktu_transaksi >= $month && $transaksi->waktu_transaksi <= now())->sum('total_harga');
                }
            } else {
                $salesMonths[$i] = [$month->format('F Y'), null];
                $salesMonths[$i][1] = $transactionMonth->sum('total_harga');
            }
        }
        $salesMonths = array_reverse($salesMonths);
        $dataLabels = [];
        $dataSales = [];
        $count = count($salesMonths);
        $j = -1;
        for ($i=0; $i < 6; $i++) { 
            if ($i >= $count) {
                $month = Carbon::parse($salesMonths[$j][0])->addMonths($i-$count+1);
                $dataLabels[$i] = $month->format('F');
                $dataSales[$i] = null;
            } else {
                $dataLabels[$i] = Carbon::parse($salesMonths[$i][0])->format('F');
                $dataSales[$i] = $salesMonths[$i][1];
                $j++;
            }
        }
        $lastTransactions = $semuaTransaksi->take(10);
        return view('admin.index', compact('dataLabels', 'dataSales', 'totalSales', 'lastTransactions'));
    }
}
