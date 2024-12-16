<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DetailTransaksi extends Pivot
{
    protected $table = 'detail_transaksi';

    public function diskon()
    {
        return $this->belongsTo(Diskon::class, 'id_diskon', 'id_diskon');
    }
    
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
    
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id_transaksi');
    }
}
