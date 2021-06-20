<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class akunprofile extends Controller
{
        //Show Data
       public function panggildata(){
           $dataakun = DB::select('SELECT * FROM `table_akun`');
           return view('datapegawai',['data'=>$dataakun]);
       }
        //Delete data
       public function deletedata($id){
            DB::delete('DELETE FROM `table_akun` WHERE `table_akun`.`id` = ?',[$id]);
           return redirect()->back();
       }

        //Edit data
       public function panggildataedit($id){
            $dataakun = DB::select('SELECT * FROM `table_akun` where `table_akun`.`id` = ?',[$id]);
            return view('editpegawai',['data'=>$dataakun]);
       }
       public function editdata(Request $request,$id){
           $nik = $request ->input('nik');
           $nama_pegawai = $request ->input('nama_pegawai');
           $no_hp = $request->input('no_hp');
           DB::update('UPDATE `table_akun` SET `nik` = ?, `nama_pegawai` = ?, `no_hp` = ? WHERE `table_akun`.`id` = ?'
               ,[$nik,$nama_pegawai,$no_hp,$id]);
           return redirect('/');
       }

       //Add Data
       public function panggildatatambah(){
           return view('tambahpegawai');
       }
       public function tambahpegawai(Request $request){
           $nik1 = $request -> input('nik');
           $nama_pegawai1 = $request ->input('nama_pegawai');
           $no_hp1 = $request->input('no_hp');
           $jenis_kelamin1 = $request->input('jenis_kelamin');
           DB::insert('INSERT INTO `table_akun` (`nik`, `nama_pegawai`, `no_hp`, `jenis_kelamin`) VALUES (?, ?, ?, ?);'
           ,[$nik1,$nama_pegawai1,$no_hp1,$jenis_kelamin1]);
           return redirect('/');
       }
       public function tambahdata(){
           return view('vendor.ckfinder.browser');
       }

}
