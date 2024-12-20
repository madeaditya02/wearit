<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    protected $table = 'diskon';
    protected $guarded = ['id_diskon'];
    protected $primaryKey = 'id_diskon';

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'diskon', 'id_diskon', 'id_user');
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'waktu_mulai' => 'datetime',
            'waktu_akhir' => 'datetime',
        ];
    }
}
