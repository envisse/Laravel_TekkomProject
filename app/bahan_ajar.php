<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahan_ajar extends Model
{
    protected $table = 'bahan_ajar';

    protected $fillable = array('judul_bahan_ajar','url_bahan_ajar','thumbnail_bahan_ajar','kategori');
    public $timestamps = false;
}
