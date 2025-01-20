<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
