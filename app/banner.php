<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table='data_banner';

    protected $fillable = array('path_imagebanner','url');

    public $timestamps = false;
}
