<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    protected $primariKey = 'id_petugas';

    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level'
    ];
}
