<?php

namespace App\Http\Controllers;

use App\galeri;
use Illuminate\Support\Facades\DB;

class frontwebsite extends Controller
{
    public function showberanda()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $agenda = DB::table('agenda')->orderBy('tanggalmulai', 'asc')->get();
        $isibanner = DB::table('data_banner')->get();
        $isiberita = DB::table('data_berita')->orderByDesc('id')->get()
            ->toArray();
        $isiberita2 = DB::table('data_berita')->orderByDesc('id')
            ->limit(4)->offset(4)->get();
        $isitautan = DB::table('tautan')->get();
        $isivideo = DB::table('videos')->orderByDesc('id')->limit(1)->offset(0)
            ->get();

        //14 photo tab
        $photo1 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(0)->get();
        $photo2 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(1)->get();
        $photo3 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(2)->get();
        $photo4 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(3)->get();
        $photo5 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(4)->get();
        $photo6 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(5)->get();
        $photo7 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(6)->get();
        $photo8 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(7)->get();
        $photo9 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(8)->get();
        $photo10 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(9)->get();
        $photo11 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(10)->get();
        $photo12 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(11)->get();
        $photo13 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(12)->get();
        $photo14 = DB::table('photos')->orderByDesc('id')
            ->limit(1)->offset(13)->get();
        return view('frontwebsite.index', ['isibanner' => $isibanner,
            'isiberita' => $isiberita])
            ->with('beritas', $isiberita2)
            ->with('tautans', $isitautan)
            ->with('agendas', $agenda)
            ->with('photo1', $photo1)->with('photo2', $photo2)
            ->with('photo3', $photo3)->with('photo4', $photo4)
            ->with('photo5', $photo5)->with('photo6', $photo6)
            ->with('photo7', $photo7)->with('photo8', $photo8)
            ->with('photo9', $photo9)->with('photo10', $photo10)
            ->with('photo11', $photo11)->with('photo12', $photo12)
            ->with('photo13', $photo13)->with('photo14', $photo14)
            ->with('videos', $isivideo)
            ->with('bfooters', $beritafooter);
    }

    //TAB PROFILE
    public function showprofilevisi()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $isiberita = DB::table('data_berita')->orderByDesc('id')->get()->toArray();
        return view('frontwebsite.profilvm', ['isiberita' => $isiberita])
            ->with('bfooters', $beritafooter);
    }

    public function showprofiletupoksi()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $isiberita = DB::table('data_berita')->orderByDesc('id')->get()->toArray();
        return view('frontwebsite.profiletp', ['isiberita' => $isiberita])
            ->with('bfooters', $beritafooter);
    }

    public function showprofilestruktur()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $isiberita = DB::table('data_berita')->orderByDesc('id')->get()->toArray();
        return view('frontwebsite.profileso', ['isiberita' => $isiberita])
            ->with('bfooters', $beritafooter);
    }

    public function showfasilitaslt1()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        return view('frontwebsite.fasilitas.lt1')
            ->with('bfooters', $beritafooter);
    }

    public function showfasilitaslt2()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        return view('frontwebsite.fasilitas.lt2')
            ->with('bfooters', $beritafooter);
    }

    public function showfasilitaslt3()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        return view('frontwebsite.fasilitas.lt3')
            ->with('bfooters', $beritafooter);
    }

    //TAB PROGRAM KERJA
    //sub-tab agenda
    public function showagenda()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();

        $agenda = DB::table('agenda')->where('status', 'on going')
            ->orderByDesc('id')->paginate(10);

        return view('frontwebsite.agenda')
            ->with('agendas', $agenda)
            ->with('bfooters', $beritafooter);
    }

    public function detailagenda($id)
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $agenda = DB::table('agenda')->where('id', $id)->get();
        $tautan = DB::table('tautan')->orderByDesc('id')->limit(3)->get();
        $another = DB::table('data_berita')->where('id', '<>', $id)->orderByDesc('id')
            ->limit(3)->get();

        return view('frontwebsite.detailagenda')
            ->with('agendas', $agenda)
            ->with('bfooters', $beritafooter)
            ->with('another', $another)
            ->with('tautans', $tautan);
    }

    //sub-tab hasil kerja
    public function showhasilkerja()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $hasilkerja = DB::table('hasilkerja')->orderByDesc('id')->paginate(6);


        return view('frontwebsite.hasilkerja')
            ->with('hasilkerjas', $hasilkerja)
            ->with('bfooters', $beritafooter);
    }

    //sub-tab Instalasi jaringan
    public function showinstalasijaringan()
    {
        $jaringan = DB::table('instalasi_jaringan')->get();
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $tautan = DB::table('tautan')->orderByDesc('id')->limit(3)->get();

        //14 foto
        $photo3 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(2)->get();
        $photo2 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(1)->get();
        $photo4 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(3)->get();
        $photo1 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(0)->get();
        $photo5 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(4)->get();
        $photo6 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(5)->get();
        $photo7 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(6)->get();
        $photo8 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(7)->get();
        $photo9 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(8)->get();
        $photo10 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(9)->get();
        $photo11 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(10)->get();
        $photo12 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(11)->get();
        $photo13 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(12)->get();
        $photo14 = DB::table('foto_jaringan')->orderByDesc('id')
            ->limit(1)->offset(13)->get();


        return view('frontwebsite.instalasijaringan')
            ->with('networks', $jaringan)
            ->with('bfooters', $beritafooter)
            ->with('photo1', $photo1)->with('photo2', $photo2)->with('photo3', $photo3)->with('photo4', $photo4)
            ->with('photo5', $photo5)->with('photo6', $photo6)->with('photo7', $photo7)->with('photo8', $photo8)
            ->with('photo9', $photo9)->with('photo10', $photo10)->with('photo11', $photo11)->with('photo12', $photo12)
            ->with('photo13', $photo13)->with('photo14', $photo14)
            ->with('tautans', $tautan);
    }

    //sub-bab liputan
    public function showliputan()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();


        $photo3 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(2)->get();
        $photo2 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(1)->get();
        $photo4 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(3)->get();
        $photo1 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(0)->get();
        $photo5 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(4)->get();
        $photo6 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(5)->get();
        $photo7 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(6)->get();
        $photo8 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(7)->get();
        $photo9 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(8)->get();
        $photo10 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(9)->get();
        $photo11 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(10)->get();
        $photo12 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(11)->get();
        $photo13 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(12)->get();
        $photo14 = DB::table('foto_liputan')->orderByDesc('id')
            ->limit(1)->offset(13)->get();

        return view('frontwebsite.liputan')
            ->with('photo1', $photo1)->with('photo2', $photo2)->with('photo3', $photo3)->with('photo4', $photo4)
            ->with('photo5', $photo5)->with('photo6', $photo6)->with('photo7', $photo7)->with('photo8', $photo8)
            ->with('photo9', $photo9)->with('photo10', $photo10)->with('photo11', $photo11)->with('photo12', $photo12)
            ->with('photo13', $photo13)->with('photo14', $photo14)
            ->with('bfooters', $beritafooter);

    }

    public function detailhasilkerja($id)
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $tautan = DB::table('tautan')->orderByDesc('id')->limit(3)->get();
        $hasilkerja = DB::table('hasilkerja')->where('id', $id)->get();
        $ops_hasilkerja = DB::table('ops_hasilkerja')->where('hasilkerja_id', $id)->get();
        $another = DB::table('data_berita')->where('id', '<>', $id)->orderByDesc('id')
            ->limit(3)->get();

        return view('frontwebsite.detailhasilkerja')
            ->with('hasilkerjas', $hasilkerja)
            ->with('tautans', $tautan)
            ->with('another', $another)
            ->with('bfooters', $beritafooter)
            ->with('opshasilkerjas', $ops_hasilkerja);
    }


    //TAB BAHAN AJAR
    //MODUL AJAR
    public function showmodulajarslbn()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $ebook = DB::table('ebook')->where('kategori', 'SLBN')->orderByDesc('id')
            ->paginate(20);
        $tingkat = 'SLBN';
        return view('frontwebsite.modulajar')->with('tingkat', $tingkat)
            ->with('ebooks', $ebook)
            ->with('bfooters', $beritafooter);
    }

    public function showmodulajarsma()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $ebook = DB::table('ebook')->where('kategori', 'SMA')->orderByDesc('id')
            ->paginate(20);
        $tingkat = 'SMA';
        return view('frontwebsite.modulajar')->with('tingkat', $tingkat)
            ->with('ebooks', $ebook)
            ->with('bfooters', $beritafooter);
    }

    public function showmodulajarsmk()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $ebook = DB::table('ebook')->where('kategori', 'SMK')->orderByDesc('id')
            ->paginate(20);
        $tingkat = 'SMK';
        return view('frontwebsite.modulajar')->with('tingkat', $tingkat)
            ->with('ebooks', $ebook)
            ->with('bfooters', $beritafooter);
    }

    //video bahan ajar
    public function showvideoajar()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();

        $slbn = DB::table('bahan_ajar')->where('kategori', 'SLB')
            ->paginate(6, ['*'], 'slbn');
        $sma = DB::table('bahan_ajar')->where('kategori', 'SMA')
            ->paginate(6, ['*'], 'sma');
        $smk = DB::table('bahan_ajar')->where('kategori', 'SMK')
            ->paginate(6, ['*'], 'smk');
        return view('frontwebsite.videoajar')
            ->with('slbns', $slbn)
            ->with('smas', $sma)
            ->with('smks', $smk)
            ->with('bfooters', $beritafooter);
    }

    //TAB KONTAK
    public function showkontak()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        return view('frontwebsite.kontak')->with('bfooters', $beritafooter);
    }


    //TAB GALERI
    //TAB PHOTO DAN VIDEO
    public function showgaleri()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $galeri = galeri::with('photo')->orderByDesc('id')
            ->paginate(6, ['*'], 'galeri');
        $video = DB::table('videos')->orderByDesc('id')
            ->paginate(6, ['*'], 'video');
        return view('frontwebsite.galeri')
            ->with('galeris', $galeri)
            ->with('videos', $video)
            ->with('bfooters', $beritafooter);
    }


    //TAB BERITA
    public function showberita()
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $berita = DB::table('data_berita')->orderByDesc('id')
            ->paginate(6);
        $berita2 = DB::table('data_berita')->orderByDesc('id')->limit(5)->get();
        return view('frontwebsite.berita')
            ->with('beritas', $berita)
            ->with('beritas2', $berita2)
            ->with('bfooters', $beritafooter);
    }

    //show detail berita
    public function detailberita($id, $nama)
    {
        $beritafooter = DB::table('data_berita')->orderByDesc('id')
            ->limit(3)->offset(0)->get();
        $berita = DB::table('data_berita')->where('id', $id)->get();
        $another = DB::table('data_berita')->where('id', '<>', $id)->orderByDesc('id')
            ->limit(3)->get();
        $ops_berita = DB::table('ops_data_berita')->where('berita_id', $id)->get();
        $judul = $nama;
        $tautan = DB::table('tautan')->orderByDesc('id')->limit(3)->get();
        return view('frontwebsite.detailberita')
            ->with('beritas', $berita)
            ->with('judul', $judul)
            ->with('another', $another)
            ->with('tautans', $tautan)
            ->with('bfooters', $beritafooter)
            ->with('ops_beritas', $ops_berita);
    }


}
