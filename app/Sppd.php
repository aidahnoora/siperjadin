<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TujuanPerjalanan;
use App\Pegawai;

class Sppd extends Model
{
    protected $table = "sppd";
    protected $primaryKey = "id";
    protected $fillable = [
        'no_spt',
        'tgl_spt',
        'id_tujuan',
        'keperluan',
        'tgl_berangkat',
    	'tgl_kembali',
        'kendaraan',
        'lama_perjalanan',
        'id_pegawai',
        'hadir',
        'petunjuk',
        'temuan',
        'saran',
        'lain_lain'
    ];

    public function tujuan()
    {
        return $this->belongsTo(TujuanPerjalanan::class, 'id_tujuan');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
