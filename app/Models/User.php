<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_user';
    protected $guarded = ['id_user'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_user', 'id_user');
    }

    public function keranjang()
    {
        return $this->belongsToMany(Produk::class, 'keranjang', 'id_user', 'id_produk')->withPivot(['id_keranjang', 'quantity', 'size'])->withTimestamps();
    }

    public function favorites()
    {
        return $this->belongsToMany(Produk::class, 'favorites', 'id_user', 'id_produk')->withTimestamps();
    }

    public function alamat()
    {
        return $this->hasMany(Alamat::class, 'id_user', 'id_user');
    }
}
