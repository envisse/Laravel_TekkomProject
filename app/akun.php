<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $table = 'table_akun';

    protected $fillable = array('nip','nama_pegawai','foto_pegawai','password','tipe_admin');

    public $timestamps = false;
}
