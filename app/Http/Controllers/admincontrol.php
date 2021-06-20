<?php

namespace App\Http\Controllers;

use App\ops_berita;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Hash;
use Auth;
use File;
use App\berita;
use App\banner;
use App\bahan_ajar;
use App\akun;


class admincontrol extends Controller
{
    //FOR BERITA
    //show list berita
    public function showlistberita()
    {
        $isiberita = DB::table('data_berita')->orderByDesc('id')->get();
        $tab = 'berita';
        return view('admin.berita', array('user' => Auth::user()), ['isiberita' => $isiberita])
            ->with('tab',$tab);
    }

    //delete record berita
    public function deleteberita(Request $request, $id)
    {
        $filename = DB::table('data_berita')->select('path_thumbnail')->where('id', $id)->first();
        $imagepath = 'source/berita/' . $filename->path_thumbnail;
        $directorypath ='source/ops_berita/' . $id;
        if (file_exists($directorypath)){
            File::deleteDirectory($directorypath);
        }
        if (file_exists($imagepath)) {
            unlink($imagepath);
        }
        DB::table('ops_data_berita')->where('berita_id',$id)->delete();
        DB::table('data_berita')->where('id', $id)->delete();
        return redirect()->back();
    }

    //edit record berita
    public function editberitashow($id)
    {
        $tab = 'berita';
        $ops_edit = DB::table('ops_data_berita')->where('berita_id',$id)->get();
        $editberitas = DB::table('data_berita')->where('id', $id)->get();
        return view('admin.editberita', array('user' => Auth::user()), ['showberita' => $editberitas])
            ->with('tab',$tab)
            ->with('tab2',$ops_edit);
    }

    public function editberita(Request $request, $id)
    {
        $judul_berita = $request->input('judulberita');
        $isi_berita = $request->input('isiberita');
        $thumbnailberita = substr($isi_berita, 0, 150);

        $time = date('Y-m-d');
        $currentfile = $request->input('currentfile');  //mengambil nama image lama
        $imageberita = $request->file('thumbnailberita'); //mengambil image

        if ($imageberita == null) {
            $nameimageberita = $currentfile;
        } else {
            $nameimageberita = $imageberita->getClientOriginalName(); //mengambil nama image
        }

        if ($currentfile != $nameimageberita) {
            $pathcurrentfile = 'source/berita/' . $currentfile;
            if (file_exists($pathcurrentfile)) {
                unlink($pathcurrentfile);
            }
            $request->file('thumbnailberita')->move("source/berita/", $nameimageberita);
        }

        DB::table('data_berita')->where('id', $id)
            ->update(['judul_berita' => $judul_berita,
                'path_thumbnail' => $nameimageberita,
                'isi_berita' => $isi_berita,
                'isi_thumbnail' => $thumbnailberita,
                'tanggalpublish' => $time]);

        $directorypath = public_path('source/ops_berita/' . $id);
        File::deleteDirectory($directorypath);

        DB::table('ops_data_berita')->where('berita_id', $id)->delete();

        if ($request->hasFile('filename')) {
            foreach ($request->file('filename') as $image)
            {

                $imagename = $image->getClientOriginalName();
                $image->move("source/ops_berita/".$id, $imagename);
                $berita_ops = new ops_berita();
                $berita_ops->berita_id = $id;
                $berita_ops->path = $imagename;
                $berita_ops->save();
            }
        }

        return redirect('/administrator/listberita');
    }

    //tambah record berita
    public function showtambahberita()
    {
        $tab = 'berita';
        return view('admin.tambahberita', array('user' => Auth::user()))
            ->with('tab',$tab);
    }

    public function tambahberita(Request $request)
    {
        $judul_berita = $request->input('judulberita');
        $isi_berita = $request->input('isiberita');
        $thumbnailberita = substr($isi_berita, 0, 150);
        $time = date('Y-m-d');
        $imageberita = $request->file('thumbnailberita'); //mengambil image
        $nameimageberita = $imageberita->getClientOriginalName(); //mengambil nama image
        $request->file('thumbnailberita')->move("source/berita/", $nameimageberita); //memindahkan image upload ke path

        $berita = new berita();
        $berita->judul_berita = $judul_berita;
        $berita->path_thumbnail = $nameimageberita;
        $berita->isi_berita = $isi_berita;
        $berita->isi_thumbnail = $thumbnailberita;
        $berita->tanggalpublish = $time;
        $berita->save();

        $id = DB::table('data_berita')->where('judul_berita', $judul_berita)->value('id');

        //add multiple image
        if ($request->hasFile('filename')) {
            foreach ($request->file('filename') as $image)
            {
                $imagename = $image->getClientOriginalName();
                $image->move("source/ops_berita/".$id, $imagename);
                $hasilkerja_ops = new ops_berita();
                $hasilkerja_ops->berita_id = $id;
                $hasilkerja_ops->path = $imagename;
                $hasilkerja_ops->save();
            }

        }
        return redirect('/administrator/listberita');
    }




    //FOR BANNER
    //Show list banner
    public function showlistbanner()
    {
        $isibanner = DB::table('data_banner')->get();

        return view('admin.banner', array('user' => Auth::user()), ['isibanner' => $isibanner]);
    }

    //Edit banner
    public function editbannershow($id)
    {
        $isibanner = DB::table('data_banner')->where('id', $id)->get();
        return view('admin.editbanner', array('user' => Auth::user()), ['isibanner' => $isibanner]);
    }

    public function editbanner(Request $request, $id)
    {
        $url = $request->input('url');
        $currentfile = $request->input('currentfile');  //mengambil nama image lama
        $imagebanner = $request->file('imagebanner'); //mengambil image

        if ($imagebanner == null) {
            $nameimagebanner = $currentfile;
        } else {
            $nameimagebanner = $imagebanner->getClientOriginalName(); //mengambil nama image baru
        }

        if ($currentfile != $nameimagebanner) {
            $pathcurrentfile = 'source/banner/' . $currentfile;
            if (file_exists($pathcurrentfile)) {
                unlink($pathcurrentfile);
            }
            $request->file('imagebanner')->move("source/banner/", $nameimagebanner);
        }

        DB::table('data_banner')->where('id', $id)
            ->update(['path_imagebanner' => $nameimagebanner,
                'url' => $url
            ]);
        return redirect('/administrator/banner');
    }

    //delete banner
    public function deletebanner($id)
    {
        $filename = DB::table('data_banner')->select('path_imagebanner')->where('id', $id)->first();

        $imagepath = 'source/banner/' . $filename->path_imagebanner;

        if (file_exists($imagepath)) {
            unlink($imagepath);
        }

        DB::table('data_banner')->where('id', $id)->delete();
        return redirect('/administrator/banner');
    }

    //tambah banner
    public function showtambahbanner()
    {
        return view('admin.tambahbanner', array('user' => Auth::user()));
    }

    public function tambahbanner(Request $request)
    {
        $url = $request->input('url');

        $imagebanner = $request->file('imagebanner'); //mengambil image
        $nameimagebanner = $imagebanner->getClientOriginalName(); //mengambil nama image
        $request->file('imagebanner')->move("source/banner/", $nameimagebanner); //memindahkan image upload ke path

        $addbanner = new banner();
        $addbanner->path_imagebanner = $nameimagebanner;
        $addbanner->url = $url;
        $addbanner->save();

        return redirect('/administrator/banner');
    }

    //FOR BAHAN AJAR
    //show list bahan ajar
    public function showlistba()
    {
        $isibahanajar = DB::table('bahan_ajar')->orderByDesc('id')->get();
        return view('admin.bahanajar', array('user' => Auth::user()), ['isibahanajar' => $isibahanajar]);
    }

    //tambah bahan ajar
    //show bahan ajar
    public function showtambahba()
    {
        return view('admin.tambahbahanajar', array('user' => Auth::user()));
    }

    //tambah bahan ajar
    public function tambahba(Request $request)
    {
        $judul = $request->input('judul_bahanajar');
        $url = $request->input('url_bahanajar');
        $thumbnailurl = substr($url, 32, 11);
        $kategori = $request->input('kategori');

        $tambah = new bahan_ajar();
        $tambah->judul_bahan_ajar = $judul;
        $tambah->url_bahan_ajar = $url;
        $tambah->thumbnail_bahan_ajar = $thumbnailurl;
        $tambah->kategori = $kategori;
        $tambah->save();

        return redirect('/administrator/bahanajar');
    }

    //delete bahan ajar
    public function deleteba($id)
    {
        DB::table('bahan_ajar')->where('id', $id)->delete();
        return redirect()->back();
    }

    //edit bahan ajar
    public function showeditba($id)
    {
        $isibahanajar = DB::table('bahan_ajar')->where('id', $id)->get();
        return view('admin.editbahanajar', array('user' => Auth::user()), ['isibahanajar'
        => $isibahanajar]);
    }

    public function editba(Request $request, $id)
    {
        $judul = $request->input('judul_bahanajar');
        $url = $request->input('url_bahanajar');
        $thumbnailurl = substr($url, 32, 11);
        $kategori = $request->input('kategori');

        DB::table('bahan_ajar')->where('id', $id)
            ->update(['judul_bahan_ajar' => $judul,
                'url_bahan_ajar' => $url,
                'thumbnail_bahan_ajar' => $thumbnailurl,
                'kategori' => $kategori]);

        return redirect('/administrator/bahanajar');
    }



    //FOR PENGATURAN AKUN
    //Show Account
    public function account()
    {
        $isiaccount = DB::table('table_akun')->get();
        return view('admin.pegawai', array('user' => Auth::user()), ['isiaccount' => $isiaccount]);
    }

    //tampilan Tambah Account
    public function showtambahpegawai()
    {

        return view('admin.tambahpegawai', array('user' => Auth::user()));
    }

    //Tambah Account
    public function tambahpegawai(Request $request)
    {
        $nik = $request->input('nik');
        $nama_pegawai = $request->input('nama_pegawai');
        $password = $request->input('password');
        $hashpassword = Hash::make($password); //hashed
        $tipe_admin = $request->input('tipe_admin');
        $imagepegawai = $request->file('fotopegawai');

        if ($imagepegawai != null) {
            $nameimagepegawai = $imagepegawai->getClientOriginalName();
            $request->file('fotopegawai')->move("source/pegawai/", $nameimagepegawai);


            $user = User::create([
                'nip' => $nik,
                'nama_pegawai' => $nama_pegawai,
                'foto_pegawai' => $nameimagepegawai,
                'password' => $hashpassword,
                'tipe_admin' => $tipe_admin
            ]);

            if (strlen($tipe_admin) == 4) {
                $user->assignRole('user');
            } else {
                $user->assignRole('master');
            }

        } else {
            $user = User::create([
                'nip' => $nik,
                'nama_pegawai' => $nama_pegawai,
                'password' => $hashpassword,
                'tipe_admin' => $tipe_admin
            ]);

            if (strlen($tipe_admin) == 4) {
                $user->assignRole('user');
            } else {
                $user->assignRole('master');
            }
        }
        return redirect('/administrator/account');
    }

    //Hapus Account
    public function deleteaccount($id)
    {
        $filename = DB::table('table_akun')->select('foto_pegawai')->where('id', $id)->first();
        $imagepath = 'source/pegawai/' . $filename->foto_pegawai;

        if (file_exists($imagepath)) {
            if ($filename->foto_pegawai != 'defaultimage.png') {
                unlink($imagepath);
            }
        }

        DB::table('table_akun')->where('id', $id)->delete();
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        return redirect()->back();
    }

    //edit account
    public function showeditaccount($id)
    {
        $isiaccount = DB::table('table_akun')->where('id', $id)->get();
        return view('admin.editpegawai', array('user' => Auth::user()), ['isiaccount' => $isiaccount]);
    }

    public function editdataaccount(Request $request, $id)
    {
        $nik = $request->input('nik');
        $nama_pegawai = $request->input('nama_pegawai');

        $currentfile = $request->input('currentfile');
        $imagepegawai = $request->file('fotopegawai');

        if ($imagepegawai == null) {
            $nameimagepegawai = $currentfile;
        } else {
            $nameimagepegawai = $imagepegawai->getClientOriginalName(); //mengambil nama image baru
        }

        if ($currentfile != $nameimagepegawai) {
            $pathcurrentfile = 'source/pegawai/' . $nameimagepegawai;
            if (file_exists($pathcurrentfile)) {
                if ($nameimagepegawai != 'defaultimage.png') {
                    unlink($pathcurrentfile);
                }
            }
            $request->file('fotopegawai')->move("source/pegawai/", $nameimagepegawai);
        }

        DB::table('table_akun')->where('id', $id)
            ->update(['nip' => $nik,
                'nama_pegawai' => $nama_pegawai,
                'foto_pegawai' => $nameimagepegawai]);

        return redirect('/administrator/account');
    }
}
