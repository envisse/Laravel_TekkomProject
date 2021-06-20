<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $fillable = array('name');

    public function photo(){
        return $this->hasMany('App\photo');
    }
}
