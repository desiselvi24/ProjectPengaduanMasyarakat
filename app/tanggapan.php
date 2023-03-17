<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    protected $table = "tanggapans";
    protected $primaryKey = "id_tanggapan";
    protected $fillable = [
        'id_pengaduan',
        'tgl_tanggapan',
        'tanggapan',
        'nik',
        'id_petugas'];

        public function tanggapan()
    {
        return $this->belongsTo('App\Tanggapan','id_tanggapan','id_tanggapan');
    }
  
}
