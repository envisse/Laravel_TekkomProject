<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ebook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ebookcontrol extends Controller
{
    public function showebook(){
        $ebook = DB::table('ebook')->get();
        return view('admin.unduhan',array('user' => Auth::user()))
            ->with('ebooks',$ebook);
    }

    //tambah
    public function showtambah(){
        return view('admin.tambahunduhan',array('user' => Auth::user()));
    }

    public function tambah(Request $request){
        $name = $request->input('nama');
        $url = $request->input('url');
        $kategori = $request->input('kategori');

        $ebook = new ebook();
        $ebook->nama_ebook = $name;
        $ebook->url_ebook = $url;
        $ebook->kategori = $kategori;
        $ebook->save();

        return redirect('/administrator/e-book');
    }

    //delete
    public function delete($id){
        DB::table('ebook')->where('id',$id)->delete();
        return redirect()->back();
    }

    //edit
    public function showedit($id){
        $ebook = DB::table('ebook')->where('id',$id)->get();
        return view('admin.editunduhan',array('user' => Auth::user()))
            ->with('ebooks',$ebook);
    }


    public function edit(Request $request,$id){
        $name = $request->input('nama');
        $url = $request->input('url');
        $kategori = $request->input('kategori');

        DB::table('ebook')->where('id', $id)
            ->update(['nama_ebook' => $name,
                'url_ebook' => $url,
                'kategori' => $kategori]);

        return redirect('/administrator/e-book');
    }
}
