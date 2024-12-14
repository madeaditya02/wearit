<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UkuranProduk extends Model
{
    protected $table = 'ukuran_produk';
    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
}
