<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    public $timestamps = 'false';
    protected $table = "tanggapans";
    protected $primaryKey = "id_tanggapan";
    protected $fillable = [
        'id_pengaduan',
        'tgl_tanggapan',
        'tanggapan',
        'id_petugas'];
  
}
