<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jabatan;
use App\Instansi;
use App\Pangkat;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_pegawai',
        'nip',
        'uh',
        'um',
        'ut',
        'tingkat_biaya',
    	'jabatan_id',
        'pangkat_id',
        'instansi_id',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class, 'pangkat_id');
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }

    public function bendahara()
    {
        return $this->hasMany(Bendahara::class);
    }

    public function sppd()
    {
        return $this->belongsToMany(Sppd::class);
    }
}
