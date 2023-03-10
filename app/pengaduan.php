<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $timestamp = 'false';
    protected $table = 'pengaduans';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['tgl_pengaduan','nik','isi_laporan','foto','status'];

}