<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class installjaringan extends Model
{
    protected $table = 'instalasi_jaringan';
    public $timestamps = false;
    protected $fillable = array('nama_sekolah','kota_sekolah');
}
