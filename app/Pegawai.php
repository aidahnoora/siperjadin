<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
    	'id_jabatan',
        'id_instansi',
        'nama_pegawai',
        'nip',
        'pangkat'
    ];
}
