<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $guarded = ['id'];

    public function keranjang()
    {
        return $this->belongsToMany(User::class, 'keranjang', 'id_produk', 'id_user');
    }

    public function ukuranProduk()
    {
        return $this->hasMany(UkuranProduk::class, 'id_produk');
    }

    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class, 'detail_transaksi', 'id_produk', 'id_transaksi')->using(DetailTransaksi::class)->withPivot(['id_diskon']);
    }

    public function diskon()
    {
        return $this->hasMany(Diskon::class, 'id_produk', 'id_produk');
    }
}
