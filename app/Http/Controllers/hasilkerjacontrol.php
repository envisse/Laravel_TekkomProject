<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use File;
use App\hasilkerja;
use App\ops_hasilkerja;
use phpDocumentor\Reflection\Types\Null_;

class hasilkerjacontrol extends Controller
{
    public function show()
    {
        $hasil = DB::table('hasilkerja')->orderByDesc('id')->get();
        $tab = 'hasilkerja';
        return view('admin.berita', array('user' => Auth::user()), ['hasils' => $hasil])
            ->with('tab', $tab);
    }

    public function addshow()
    {
        $tab = 'hasilkerja';
        return view('admin.tambahberita', array('user' => Auth::user()))
            ->with('tab', $tab);
    }

    public function add(Request $request)
    {
        $judul = $request->input('judul');
        $path = $request->file('image');
        $desc = $request->input('desc');
        $thumbnail_desc = substr($desc, 0, 150);

        $namepath = $path->getClientOriginalName();
        $path->move("source/hasilkerja/",$namepath);

        $hasilkerja = new hasilkerja();
        $hasilkerja->judul = $judul;
        $hasilkerja->desc = $desc;
        $hasilkerja->thumbnail_desc = $thumbnail_desc;
        $hasilkerja->path = $namepath;
        $hasilkerja->tanggalpublish = date('Y-m-d');
        $hasilkerja->save();

        $id = DB::table('hasilkerja')->where('judul', $judul)->value('id');

        //add multiple image
        if ($request->hasFile('filename')) {
            foreach ($request->file('filename') as $image)
            {
                $imagename = $image->getClientOriginalName();
                $image->move("source/ops_hasilkerja/".$id, $imagename);
                $hasilkerja_ops = new ops_hasilkerja();
                $hasilkerja_ops->hasilkerja_id = $id;
                $hasilkerja_ops->path = $imagename;
                $hasilkerja_ops->save();
            }

        }
        return redirect('/administrator/listhasilkerja');
    }

    public function delete($id)
    {
        DB::table('hasilkerja')->where('id', $id)->delete();
        DB::table('ops_hasilkerja')->where('hasilkerja_id',$id)->delete();
        $directorypath ='source/ops_hasilkerja/' . $id;
        if (file_exists($directorypath)){
            File::deleteDirectory($directorypath);
        }
        return redirect()->back();
    }

    public function editshow($id)
    {
        $tab = 'hasilkerja';
        $edit = DB::table('hasilkerja')->where('id', $id)->get();
        $ops_edit = DB::table('ops_hasilkerja')->where('hasilkerja_id',$id)->get();

        return view('admin.editberita', array('user' => Auth::user()))
            ->with('edit',$edit)
            ->with('tab', $tab)
            ->with('tab2',$ops_edit);
    }

    public function edit(Request $request, $id)
    {
        $judul = $request->input('judul');
        $desc = $request->input('desc');
        $thumbnail_desc = substr($desc, 0, 150);

        $currentfile = $request->input('currentimage');  //mengambil nama image lama
        $imagekerja = $request->file('image'); //mengambil image

        if ($imagekerja == null) {
            $nameimagekerja = $currentfile;
        } else {
            $nameimagekerja = $imagekerja->getClientOriginalName(); //mengambil nama image baru
        }

        if ($currentfile != $nameimagekerja) {
            $pathcurrentfile = 'source/hasilkerja/' . $currentfile;
            if (file_exists($pathcurrentfile)) {
                unlink($pathcurrentfile);
            }
            $request->file('image')->move("source/hasilkerja/", $nameimagekerja);
        }

        DB::table('hasilkerja')->where('id', $id)
            ->update(['judul' => $judul,
                'desc' => $desc,
                'thumbnail_desc' => $thumbnail_desc,
                'path' => $nameimagekerja,
                'tanggalpublish' => date('Y-m-d')]);


        $directorypath = public_path('source/ops_hasilkerja/' . $id);
        File::deleteDirectory($directorypath);

        DB::table('ops_hasilkerja')->where('hasilkerja_id', $id)->delete();

        if ($request->hasFile('filename')) {
            foreach ($request->file('filename') as $image)
            {

                $imagename = $image->getClientOriginalName();
                $image->move("source/ops_hasilkerja/".$id, $imagename);
                $hasilkerja_ops = new ops_hasilkerja();
                $hasilkerja_ops->hasilkerja_id = $id;
                $hasilkerja_ops->path = $imagename;
                $hasilkerja_ops->save();
            }
        }
        return redirect('/administrator/listhasilkerja');
    }
}
