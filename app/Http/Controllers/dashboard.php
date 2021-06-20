<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\video;
use App\galeri;
use App\bahan_ajar;
use App\berita;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class dashboard extends Controller
{
    public function view(){
        $album = galeri::all();
        $video = video::all();
        $berita = berita::all();
        $bahan_ajar = bahan_ajar::all();

        //auth()->user()->givePermissionTo('control akun');
        //auth()->user()->assignRole('akun control');
        //Role::create(['name'=>'akun control']);
        //Permission::create(['name'=>'control akun']);



        return view('admin.dashboard',array('user'=>Auth::user()))
            ->with('album',$album)
            ->with('video',$video)
            ->with('berita',$berita)
            ->with('bahan_ajar',$bahan_ajar);
    }
}
