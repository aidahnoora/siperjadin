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
        'tujuan_id',
        'keperluan',
        'tgl_berangkat',
    	'tgl_kembali',
        'kendaraan',
        'lama_perjalanan',
        'hadir',
        'petunjuk',
        'temuan',
        'saran',
        'lain_lain'
    ];

    public function tujuan()
    {
        return $this->belongsTo(TujuanPerjalanan::class, 'tujuan_id');
    }

    public function pegawai()
    {
        return $this->belongsToMany(Pegawai::class);
    }
}
