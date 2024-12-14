<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        return $this->hasMany(Diskon::class, 'id_produk', 'id')->where('waktu_mulai', '<=', now())->where('waktu_akhir', '>=', now())->limit(1);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'id_user', 'id_produk')->withTimestamps();
    }
    
    public function hargaDiskon(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->diskon->count() ? $this->diskon[0]->jumlah_diskon * $this->harga_produk / 100 : 0,
        );
    }
    
    public function hargaSetelahDiskon(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->diskon->count() ? $this->harga_produk - ($this->diskon[0]->jumlah_diskon * $this->harga_produk / 100) : $this->harga_produk,
        );
    }
}
