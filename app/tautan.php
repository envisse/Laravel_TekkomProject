<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tautan extends Model
{
    protected $table = 'tautan';

    protected $fillable = array('image_tautan','url_tautan');

    public $timestamps = false;
}
