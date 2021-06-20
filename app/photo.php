<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected  $fillable = array('galeri_id','img_name');

    public function galeri(){
        return $this->belongsTo('App\galeri');
    }
}
