<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'data_berita';
    public $timestamps = false;
    protected $fillable = array('judul_berita','path_thumbnail','isi_berita','isi_thumbnail','tanggalpublish');
}
