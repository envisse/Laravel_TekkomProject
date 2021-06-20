<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasilkerja extends Model
{
    protected $table = 'hasilkerja';
    public $timestamps = false;
    protected $fillable = array('judul', 'desc', 'thumbnail_desc', 'path', 'tanggalpublish');
}
