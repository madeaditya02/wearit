<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    protected $table = 'diskon';

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'diskon_pelanggan', 'id_diskon', 'id_user');
    }
}
