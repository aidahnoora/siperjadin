<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = "instansi";
    protected $primaryKey = "id";
    protected $fillable = [
    	'nama_instansi',
        'alamat',
        'logo'
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
