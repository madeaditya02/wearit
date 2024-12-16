<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $guarded = ['id_transaksi'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'detail_transaksi', 'id_transaksi', 'id_produk')->using(DetailTransaksi::class)->withPivot(['id_diskon', 'size_produk', 'quantity']);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class, 'id_alamat', 'id_alamat');
    }
}
