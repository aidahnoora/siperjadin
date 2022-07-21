<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $table = "pangkat";
    protected $primaryKey = "id";
    protected $fillable = [
    	'nama_pangkat',
        'golru'
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
