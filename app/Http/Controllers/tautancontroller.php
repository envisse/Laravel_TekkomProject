<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\tautan;
use Illuminate\Support\Facades\DB;

class tautancontroller extends Controller
{
    public function showtautan()
    {
        $tuatan = tautan::orderBy('id', 'DESC')->get();
        return view('admin.tautan', array('user' => Auth::user()))
            ->with('tautans', $tuatan);
    }

    public function showtambahtautan()
    {
        return view('admin.tambahtautan', array('user' => Auth::user()));
    }

    public function tambahtautan(Request $request)
    {
        $url = $request->input('tautan');

        $imagetautan = $request->file('fototautan'); //mengambil image
        $namefototautan = $imagetautan->getClientOriginalName(); //mengambil nama image
        $request->file('fototautan')->move("source/tautan/", $namefototautan);

        $tautan = new tautan();
        $tautan->url_tautan = $url;
        $tautan->image_tautan = $namefototautan;
        $tautan->save();

        return redirect('/administrator/tautan');
    }

    public function deletetautan($id)
    {
        DB::table('tautan')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function editshow($id)
    {
        $tautan = DB::table('tautan')->where('id', $id)->get();
        return view('admin.edittautan', array('user' => Auth::user()))
            ->with('tautans', $tautan);
    }

    public function edit(Request $request, $id)
    {
        $url = $request->input('tautan');
        $currentfile = $request->input('currentfile');
        $imagetautan = $request->file('fototautan');

        if ($imagetautan == null) {
            $nameimagetautan = $currentfile;
        } else {
            $nameimagetautan = $imagetautan->getClientOriginalName();
        }

        if ($currentfile != $nameimagetautan) {
            $pathcurrentfile = 'source/tautan/' . $currentfile;
            if (file_exists($pathcurrentfile)) {
                unlink($pathcurrentfile);
            }
            $request->file('fototautan')->move("source/tautan/", $nameimagetautan);
        }

        DB::table('tautan')->where('id', $id)
            ->update(['image_tautan' => $nameimagetautan,
                'url_tautan' => $url
            ]);

        return redirect('/administrator/tautan');
    }
}
