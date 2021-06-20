<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Auth;
use App\galeri;
use App\photo;
use File;
use App\video;


class galericontrol extends Controller
{
    //CHOOSE
    public function show_choose()
    {
        $countgaleri = galeri::all();
        $countvideo = video::all();
        return view('admin.galerichoose', array('user' => Auth::user()))
            ->with('countgaleri', $countgaleri)
            ->with('countvideo', $countvideo);
    }


    //show galeri
    public function show_galeri()
    {
        $galeri = galeri::with('photo')->Paginate(6);
        $countgaleri = count($galeri) % 3;
        return view('admin.galeri', array('user' => Auth::user()))
            ->with('galeris', $galeri)
            ->with('countgaleri', $countgaleri);
    }

    //tambah galeri
    public function show_tambah_galeri()
    {

        return view('admin.tambahgaleri', array('user' => Auth::user()));
    }

    public function tambah_galeri(Request $request)
    {
        $galeri = new galeri;
        $galeri->name = $request->input('nama_album');
        $galeri->save();
        return redirect('/administrator/galeri/album');
    }

    //tab expand galeri
    public function show_expand_galeri($id)
    {
        $namagaleri = galeri::with('photo')->find($id);
        return view('admin.expandgaleri', array('user' => Auth::user()))->with('galeri', $namagaleri);
    }


    //tab tambah foto
    public function show_tambah_foto_galeri($galeri_id)
    {
        $name = DB::table('galeris')->where('id', $galeri_id)->first();
        return view('admin.tambahgambargaleri', array('user' => Auth::user()))
            ->with('galeri_id', $galeri_id)
            ->with('name', $name);
    }

    public function tambah_foto_galeri(Request $request)
    {
        $img = $request->file('photogaleri');
        $name_img = $img->getClientOriginalName();
        $request->file('photogaleri')->move("source/eventphoto/" . $request->input('galeri_id'), $name_img);

        $photo = new photo();
        $photo->img_name = $name_img;
        $photo->galeri_id = $request->input('galeri_id');
        $photo->save();

        return redirect('/administrator/galeri/album/expandgaleri/' . $request->input('galeri_id'));
    }

    //tab delete foto
    public function deletefoto($idalbum, $idphoto)
    {
        $path = DB::table('photos')->select('img_name')->where('id', $idphoto)->first();
        $imagepath = 'source/eventphoto/' . $idalbum . '/' . $path->img_name;
        if (file_exists($imagepath)) {
            unlink($imagepath);
        }
        DB::table('photos')->where('id', $idphoto)->delete();
        return redirect('/administrator/galeri/album/expandgaleri/' . $idalbum);
    }

    //delete album
    public function deletegaleri($idalbum)
    {
        $directorypath = public_path('source/eventphoto/' . $idalbum);
        File::deleteDirectory($directorypath);
        DB::table('photos')->where('galeri_id', $idalbum)->delete();
        DB::table('galeris')->where('id', $idalbum)->delete();
        return redirect()->back();
    }


    //for video
    //show list video
    public function show_video()
    {
        $video = DB::table('videos')->orderByDesc('id')->paginate(6);
        return view('admin.video', array('user' => Auth::user()))->with('videos', $video);
    }

    //edit video
    //show edit video
    public function show_editvideo($id)
    {
        $video = DB::table('videos')->where('id', $id)->get();
        return view('admin.editvideo', array('user' => Auth::user()))->with('video', $video);
    }

    public function editvideo(Request $request, $id)
    {
        DB::table('videos')
            ->where('id', $id)
            ->update(['judul_video' => $request->input('nama_video'),
                'url_video' => $request->input('url_video'),
                'thumbnail_video' => substr($request->input('url_video'), 32, 11)]);

        return redirect('/administrator/galeri/video');
    }

    //tambah video
    //show tambah video
    public function show_tambahvideo()
    {
        return view('admin.tambahvideo', array('user' => Auth::user()));
    }

    public function tambahvideo(Request $request)
    {
        $video = new video();
        $video->judul_video = $request->input('nama_video');
        $video->url_video = $request->input('url_video');
        $video->thumbnail_video = substr($request->input('url_video'), 32, 11);
        $video->save();
        return redirect('/administrator/galeri/video');
    }

    //delete video
    public function deletevideo($id)
    {
        DB::table('videos')
            ->where('id', $id)
            ->delete();
        return back();
    }
}
