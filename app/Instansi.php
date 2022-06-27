<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = "intansi";
    protected $primaryKey = "id";
    protected $fillable = [
    	'nama_instansi',
        'alamat',
        'logo'
    ];
}
