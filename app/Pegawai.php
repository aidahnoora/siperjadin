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
    	'id_jabatan',
        'id_pangkat',
        'id_instansi',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class, 'id_pangkat');
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'id_instansi');
    }

    public function bendahara()
    {
        return $this->hasMany(Bendahara::class);
    }

    public function sppd()
    {
        return $this->hasMany(Sppd::class);
    }
}
