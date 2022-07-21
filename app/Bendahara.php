<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bendahara extends Model
{
    protected $table = "bendahara";
    protected $primaryKey = "id";
    protected $fillable = [
    	'nama_bendahara',
        'id_pegawai'
    ];
}
