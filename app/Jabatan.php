<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = "id";
    protected $fillable = [
    	'nama_jabatan'
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
