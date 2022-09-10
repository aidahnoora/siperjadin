<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bendahara extends Model
{
    protected $table = "bendahara";
    protected $primaryKey = "id";
    protected $fillable = [
        'pegawai_id'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
