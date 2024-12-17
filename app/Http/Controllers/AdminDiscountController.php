<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDiscountController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        $discounts = Diskon::with('produk');
        if ($search) {
            $discounts = $discounts->where('id_produk', $search)->orWhereHas('produk', function ($query) use ($search) {
                return $query->where('nama_produk', 'LIKE', "%$search%");
            })->orderBy('waktu_mulai', 'desc')->paginate(10);
            $discounts->appends(['search' => $search]);
        } else {
            $discounts = $discounts->orderBy('waktu_mulai', 'desc')->paginate(10);
        }
        return view("admin.Diskon", compact('discounts', 'search'));
    }
    
    public function create(Request $request) {
        return view("admin.AddDiscount");
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'id_produk' => 'required|exists:produk,id',
            'jumlah_diskon' => 'required|numeric',
            'waktu_mulai' => 'required|after_or_equal:today',
            'waktu_akhir' => 'required|after_or_equal:today',
        ]);
        Diskon::create($data);
        return redirect("/admin/discount")->with('alert', ['icon' => 'success', 'title' => 'Discount', 'text' => 'Discount added successfully']);
    }
    
    public function edit($id_diskon) {
        $diskon = Diskon::find($id_diskon);
        return view("admin.EditDiscount", compact('diskon'));
    }
    
    public function update($id_diskon, Request $request) {
        $data = $request->validate([
            'jumlah_diskon' => 'required|numeric',
            'waktu_mulai' => 'required|after_or_equal:today',
            'waktu_akhir' => 'required|after_or_equal:today',
        ]);
        $diskon = Diskon::find($id_diskon);
        $diskon->jumlah_diskon = $data['jumlah_diskon'];
        $diskon->waktu_mulai = $data['waktu_mulai'];
        $diskon->waktu_akhir = $data['waktu_akhir'];
        $diskon->save();
        return redirect("/admin/discount")->with('alert', ['icon' => 'success', 'title' => 'Discount', 'text' => 'Discount updated successfully']);
    }
    
    public function destroy($id_diskon) {
        Diskon::destroy($id_diskon);
        return redirect("/admin/discount")->with('alert', ['icon' => 'success', 'title' => 'Discount', 'text' => 'Discount deleted successfully']);
    }
}
