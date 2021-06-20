<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ops_hasilkerja extends Model
{
    protected $table = 'ops_hasilkerja';
    protected $fillable = array('hasilkerja_id', 'path');
    public $timestamps = false;
}
