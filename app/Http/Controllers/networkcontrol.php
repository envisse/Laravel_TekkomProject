<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\installjaringan;
use Illuminate\Support\Facades\DB;

class networkcontrol extends Controller
{
    public function show()
    {
        $network = DB::table('instalasi_jaringan')->get();
        return view('admin.network', array('user' => Auth::user()))
            ->with('networks', $network);
    }

    public function showadd()
    {
        return view('admin.tambahnetwork', array('user' => Auth::user()));
    }

    public function add(Request $request)
    {
        $sekolah = $request->input('sekolah');
        $kota = $request->input('kota');

        $network = new installjaringan();
        $network->nama_sekolah = $sekolah;
        $network->kota_sekolah = $kota;
        $network->save();

        return redirect('/administrator/network');
    }

    public function showedit($id)
    {
        $network = DB::table('instalasi_jaringan')->where('id', $id)->get();


        return view('admin.editnetwork', array('user' => Auth::user()))
            ->with('networks', $network);
    }

    public function edit(Request $request, $id)
    {
        $sekolah = $request->input('sekolah');
        $kota = $request->input('kota');

        DB::table('instalasi_jaringan')->where('id', $id)
            ->update(['nama_sekolah' => $sekolah,
                'kota_sekolah' => $kota]);

        return redirect('/administrator/network');
    }

    public function delete($id)
    {
        DB::table('instalasi_jaringan')->where('id', $id)->delete();
        return redirect()->back();
    }

}
