<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\foto_jaringan;
use App\foto_liputan;
use Auth;
use Illuminate\Support\Facades\DB;

class aditionalimagecontrol extends Controller
{
    //for jaringan
    //show image jaringan
    public function showimagejaringan(){
        $foto = DB::table('foto_jaringan')->get();
        return view('admin.networkfoto', array('user' => Auth::user()))
            ->with('fotos', $foto);
    }


    public function showadd(){
        return view('admin.tambahfotonetwork', array('user' => Auth::user()));
    }

    public function add(Request $request){
        $path = $request->file('foto');
        $desc=$request->input('desc');

        $imagename= $path->getClientOriginalName();
        $path->move("source/ops_jaringan/",$imagename);

        $foto_jaringan = new foto_jaringan();
        $foto_jaringan->desc_foto = $desc;
        $foto_jaringan->path_foto = $imagename;
        $foto_jaringan->save();

        return redirect('/administrator/fotonetwork');

    }

    public function delete($id){

        $path = DB::table('foto_jaringan')->where('id',$id)->first();
        $pathcurrentfile = 'source/ops_jaringan/'.$path->path_foto;
        if (file_exists($pathcurrentfile)){
            unlink($pathcurrentfile);
        }
        DB::table('foto_jaringan')->where('id',$id)->delete();
        return redirect()->back();
    }



    //for liputan
    public function showimageliputan(){
        $foto = DB::table('foto_liputan')->get();
        return view('admin.liputanfoto', array('user' => Auth::user()))
            ->with('fotos', $foto);
    }

    //show add
    public function showaddliputan(){
        return view('admin.tambahfotoliputan', array('user' => Auth::user()));
    }

    public function addliputan(Request $request){
        $path = $request->file('foto');
        $desc=$request->input('desc');

        $imagename= $path->getClientOriginalName();
        $path->move("source/ops_liputan/",$imagename);

        $foto_liputan = new foto_liputan();
        $foto_liputan->desc_foto = $desc;
        $foto_liputan->path_foto = $imagename;
        $foto_liputan->save();

        return redirect('/administrator/fotoliputan');
    }

    public function deleteliputan($id){
        $path = DB::table('foto_liputan')->where('id',$id)->first();
        $pathcurrentfile = 'source/ops_liputan/'.$path->path_foto;
        if (file_exists($pathcurrentfile)){
            unlink($pathcurrentfile);
        }
        DB::table('foto_liputan')->where('id',$id)->delete();


        return redirect()->back();
    }

}
