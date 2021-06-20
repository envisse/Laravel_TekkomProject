<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ebook extends Model
{
    protected $table = 'ebook';
    protected $fillable = array('nama_ebook','url_ebook','kategori');
    public $timestamps = false;
}
