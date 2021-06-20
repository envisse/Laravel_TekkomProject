<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ops_berita extends Model
{
    protected $table = 'ops_data_berita';
    protected $fillable = array('berita_id', 'path');
    public $timestamps = false;
}
