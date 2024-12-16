<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
