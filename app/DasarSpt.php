<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DasarSpt extends Model
{
    protected $table = "dasar_spt";
    protected $primaryKey = "id";
    protected $fillable = [
    	'nama_spt',
        'file'
    ];
}
