<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto_jaringan extends Model
{
    protected $table = 'foto_jaringan';
    protected $fillable = array('desc_foto','path_foto');
    public $timestamps = false;
}
