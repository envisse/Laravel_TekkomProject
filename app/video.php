<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable = array('judul_video','url_video','thumbnail_video');
    protected $table = 'videos';
    public $timestamps = false;
}
