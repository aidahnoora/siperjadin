<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TujuanPerjalanan extends Model
{
    protected $table = "tujuan_perjalanan";
    protected $primaryKey = "id";
    protected $fillable = [
    	'nama_tujuan',
        'nama_pejabat',
    ];

    public function sppd()
    {
        return $this->hasMany(Sppd::class);
    }
}
