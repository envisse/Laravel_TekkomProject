<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto_liputan extends Model
{
    protected $table = 'foto_liputan';
    protected $fillable = array('desc_foto','path_foto');
    public $timestamps = false;
}
