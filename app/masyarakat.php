<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class masyarakat extends Authenticatable 
{
    use HasFactory;

    protected $table = 'masyarakat';

    protected $primariKey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp'
    ];
}
