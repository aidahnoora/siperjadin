<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bendahara extends Model
{
    protected $table = "bendahara";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_pegawai'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
