<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $table = 'agenda';
    protected $fillable = array('nama_agenda', 'desc_agenda', 'tanggalmulai', 'tanggalselesai', 'status', 'start', 'end', 'alamat');
    public $timestamps = false;
}
