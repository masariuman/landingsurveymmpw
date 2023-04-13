<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGdrive extends Model
{
    protected $table = 'usergdrive';
    protected $fillable = [
        'instansi',
        'username',
        'password',
        'url'
    ];
}
