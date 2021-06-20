<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//TAB WEBSITE
//tab beranda
Route::get('/', 'frontwebsite@showberanda')
    ->name('beranda');
Route::get('/beranda', 'frontwebsite@showberanda')
    ->name('beranda');

//tab profile
Route::get('/profilevm', 'frontwebsite@showprofilevisi')->name('profilevm');
Route::get('/profileso', 'frontwebsite@showprofilestruktur')->name('strukturorganisasi');
Route::get('/profiletp', 'frontwebsite@showprofiletupoksi')->name('profiletp');
Route::get('/fasilitas/lt-1', 'frontwebsite@showfasilitaslt1')->name('fasilitas1');
Route::get('/fasilitas/lt-2', 'frontwebsite@showfasilitaslt2')->name('fasilitas2');
Route::get('/fasilitas/lt-3', 'frontwebsite@showfasilitaslt3')->name('fasilitas3');

//tab agenda
Route::get('/agenda', 'frontwebsite@showagenda')->name('agenda');
Route::get('/agenda/{id}', 'frontwebsite@detailagenda')->name('detail_agenda');

//tab hasil kerja
Route::get('/workresult', 'frontwebsite@showhasilkerja')->name('hasilkerja');
Route::get('/workresult/{id}', 'frontwebsite@detailhasilkerja')->name('detail_hasilkerja');

//tab instalasi jaringan
Route::get('/instalasijaringan', 'frontwebsite@showinstalasijaringan')->name('ikaringan');

//tab instalasi jaringan
Route::get('/liputan', 'frontwebsite@showliputan')->name('liputan');

//tab bahan ajar
Route::get('/modulajar/SLBN', 'frontwebsite@showmodulajarslbn')->name('modulajarSLBN');
Route::get('/modulajar/SMA', 'frontwebsite@showmodulajarsma')->name('modulajarSMA');
Route::get('/modulajar/SMK', 'frontwebsite@showmodulajarsmk')->name('modulajarSMK');
Route::get('/videoajar', 'frontwebsite@showvideoajar')->name('videoajar');

//tab berita
Route::get('/berita', 'frontwebsite@showberita')->name('berita');
//tab detail-berita
Route::get('/berita/{id}/{name}', 'frontwebsite@detailberita')->name('detail_berita');


//tab kontak
Route::get('/kontak', 'frontwebsite@showkontak')->name('kontak');

//tabgaleri
Route::get('/galeri', 'frontwebsite@showgaleri')->name('galeri');


//TAB ADMIN
//For DASHBOARD
Route::get('/administrator/dashboard', 'dashboard@view')->middleware('auth');
Route::get('/administrator/', 'dashboard@view')->middleware('auth');


//FOR BERITA
//list berita
Route::get('/administrator/listberita', 'admincontrol@showlistberita')->middleware('auth');
//delete berita
Route::get('/administrator/listberita/delete-berita/{id}', 'admincontrol@deleteberita')->middleware('auth');
//edit berita
Route::get('/administrator/listberita/edit-berita/{id}', 'admincontrol@editberitashow')->middleware('auth');
Route::post('/administrator/listberita/edit-berita/save/{id}', 'admincontrol@editberita')->middleware('auth');
//tambah berita
Route::get('/administrator/listberita/tambah-berita', 'admincontrol@showtambahberita')->middleware('auth');
Route::post('/administrator/listberita/tambah-berita/new', 'admincontrol@tambahberita')->middleware('auth');


//FOR HASIL KERJA
//list hasil kerja
Route::get('/administrator/listhasilkerja', 'hasilkerjacontrol@show')->middleware('auth');
//delete
Route::get('/administrator/listhasilkerja/delete-record/{id}', 'hasilkerjacontrol@delete')->middleware('auth');
//edit
Route::get('/administrator/listhasilkerja/edit-record/{id}', 'hasilkerjacontrol@editshow')->middleware('auth');
Route::post('/administrator/listhasilkerja/edit-record/save/{id}', 'hasilkerjacontrol@edit')->middleware('auth');
//tambah
Route::get('/administrator/listhasilkerja/tambah-record', 'hasilkerjacontrol@addshow')->middleware('auth');
Route::post('/administrator/listhasilkerja/tambah-record/new', 'hasilkerjacontrol@add')->middleware('auth');


//FOR BANNER
//list banner
Route::get('/administrator/banner', 'admincontrol@showlistbanner')->middleware('auth');
//edit banner
Route::get('/administrator/banner/edit-banner/{id}', 'admincontrol@editbannershow')->middleware('auth');
Route::post('/administrator/banner/edit-banner/save/{id}', 'admincontrol@editbanner')->middleware('auth');
//delete banner
Route::get('/administrator/banner/delete-banner/{id}', 'admincontrol@deletebanner')->middleware('auth');
//tambah banner
Route::get('/administrator/banner/tambah-banner', 'admincontrol@showtambahbanner')->middleware('auth');
Route::post('/administrator/banner/tambah-banner/new', 'admincontrol@tambahbanner')->middleware('auth');


//FOR PENGATURAN AKUN
Route::group(['middleware' => ['role:master']], function () {
    //list akun
    Route::get('/administrator/account', 'admincontrol@account')->middleware('auth');

    //tambah akun
    Route::get('/administrator/account/tambah-account', 'admincontrol@showtambahpegawai')->middleware('auth');
    Route::post('/administrator/account/tambah-account/new', 'admincontrol@tambahpegawai')->middleware('auth');

    //delete account
    Route::get('/administrator/account/delete-account/{id}', 'admincontrol@deleteaccount')->middleware('auth');

    //edit accout
    Route::get('/administrator/account/editdata/{id}', 'admincontrol@showeditaccount')->middleware('auth');
    Route::post('/administrator/account/editdata/save/{id}', 'admincontrol@editdataaccount')->middleware('auth');
});

//FOR TAUTAN
//list tautan
Route::get('/administrator/tautan', 'tautancontroller@showtautan')->middleware('auth');
//tambah tautan
Route::get('/administrator/tautan/tambah', 'tautancontroller@showtambahtautan')->middleware('auth');
Route::post('/administrator/tautan/tambah/new', 'tautancontroller@tambahtautan')->middleware('auth');
//delete tautan
Route::get('/administrator/tautan/delete-tautan/{id}', 'tautancontroller@deletetautan')->middleware('auth');
//edit tautan
Route::get('/administrator/tautan/edit/{id}', 'tautancontroller@editshow')->middleware('auth');
Route::post('/administrator/tautan/edit/save/{id}', 'tautancontroller@edit')->middleware('auth');


//FOR AGENDA
//list agenda
Route::get('/administrator/agenda', 'agendacontrol@showagenda')->middleware('auth');
//tambah agenda
Route::get('/administrator/agenda/tambah', 'agendacontrol@showtambahagenda')->middleware('auth');
Route::post('/administrator/agenda/tambah/new', 'agendacontrol@tambahagenda')->middleware('auth');
//delete agenda
Route::get('/administrator/agenda/delete-agenda/{id}', 'agendacontrol@deleteagenda')->middleware('auth');
//edit agenda
Route::get('/administrator/agenda/edit/{id}', 'agendacontrol@showeditagenda')->middleware('auth');
Route::post('/administrator/agenda/edit/save/{id}', 'agendacontrol@edit')->middleware('auth');


//FOR BAHAN AJAR
//list bahan ajar
Route::get('/administrator/bahanajar', 'admincontrol@showlistba')->middleware('auth');
//tambah bahan ajar
Route::get('/administrator/bahanajar/tambahba', 'admincontrol@showtambahba')->middleware('auth');
Route::post('/administrator/bahanajar/tambahba/new', 'admincontrol@tambahba')->middleware('auth');
//delete bahan ajar
Route::get('/administrator/bahanajar/deleteba/{id}', 'admincontrol@deleteba')->middleware('auth');
//edit bahan ajar
Route::get('/administrator/bahanajar/editba/{id}', 'admincontrol@showeditba')->middleware('auth');
Route::post('/administrator/bahanajar/editba/save/{id}', 'admincontrol@editba')->middleware('auth');

//FOR Link E-BOOK
//list e-book
Route::get('/administrator/e-book', 'ebookcontrol@showebook')->middleware('auth');
//tambah e-book
Route::get('/administrator/e-book/tambah', 'ebookcontrol@showtambah')->middleware('auth');
Route::post('/administrator/e-book/tambah/new', 'ebookcontrol@tambah')->middleware('auth');
//delete e-book
Route::get('/administrator/e-book/delete/{id}', 'ebookcontrol@delete')->middleware('auth');
//edit e-book
Route::get('/administrator/e-book/edit/{id}', 'ebookcontrol@showedit')->middleware('auth');
Route::post('/administrator/book/edit/save/{id}', 'ebookcontrol@edit')->middleware('auth');


//FOR PEMASANGAN JARINGAN
//list pasang jaringan
Route::get('/administrator/network', 'networkcontrol@show')->middleware('auth');
//tambah pasang jaringan
Route::get('/administrator/network/add', 'networkcontrol@showadd')->middleware('auth');
Route::post('/administrator/network/add/new', 'networkcontrol@add')->middleware('auth');
//tambah edit jaringan
Route::get('/administrator/network/edit/{id}', 'networkcontrol@showedit')->withoutMiddleware('atuh');
Route::post('/administrator/network/edit/save/{id}', 'networkcontrol@edit')->middleware('auth');
//hapus pasang jaringan
Route::get('/administrator/network/delete/{id}','networkcontrol@delete')->middleware('auth');

//image pasang jaringan
//list
Route::get('/administrator/fotonetwork','aditionalimagecontrol@showimagejaringan')->middleware('auth');
//add
Route::get('/administrator/fotonetwork/showadd','aditionalimagecontrol@showadd')->middleware('auth');
Route::post('/administrator/fotonetwork/add','aditionalimagecontrol@add')->middleware('auth');
//delete
Route::get('/administrator/fotonetwork/delete/{id}','aditionalimagecontrol@delete')->middleware('auth');


//FOR LIPUTAN
//image liputan
Route::get('/administrator/fotoliputan','aditionalimagecontrol@showimageliputan')->middleware('auth');
//add
Route::get('/administrator/fotoliputan/showadd','aditionalimagecontrol@showaddliputan')->middleware('auth');
Route::post('/administrator/fotoliputan/add','aditionalimagecontrol@addliputan')->middleware('auth');
//delete
Route::get('/administrator/fotoliputan/delete/{id}','aditionalimagecontrol@deleteliputan')->middleware('auth');


//FOR GALERI
//PILIHAN GALERI
Route::get('/administrator/galeri', 'galericontrol@show_choose')->middleware('auth');

//LIST VIDEO
Route::get('/administrator/galeri/video', 'galericontrol@show_video')->middleware('auth');
//edit video
Route::get('/administrator/galeri/video/edit/{id}', 'galericontrol@show_editvideo')->middleware('auth');
Route::post('/administrator/galeri/video/edit/save/{id}', 'galericontrol@editvideo')->middleware('auth');
//delete video
Route::get('/administrator/galeri/video/delete/{id}', 'galericontrol@deletevideo')->middleware('auth');
//tambah video
Route::get('/administrator/galeri/video/tambah', 'galericontrol@show_tambahvideo')->middleware('auth');
Route::post('/administrator/galeri/video/tambah/save', 'galericontrol@tambahvideo')->middleware('auth');

//LIST GALERI
Route::get('/administrator/galeri/album', 'galericontrol@show_galeri')->middleware('auth');
//tambah galeri
Route::get('/administrator/galeri/album/tambahgaleri', 'galericontrol@show_tambah_galeri')->middleware('auth');
Route::post('/administrator/galeri/album/tambahgaleri/new', 'galericontrol@tambah_galeri')->middleware('auth');
//list foto dalam galeri
Route::get('/administrator/galeri/album/expandgaleri/{id}', 'galericontrol@show_expand_galeri')->middleware('auth');

//tambah foto di dalam galeri
Route::get('/administrator/galeri/album/expandgaleri/tambahfotogaleri/{id}', 'galericontrol@show_tambah_foto_galeri')->middleware('auth');
Route::post('/administrator/galeri/album/expandgaleri/tambahfotogaleri/save', 'galericontrol@tambah_foto_galeri')->middleware('auth');

//delete foto dalam galeri
Route::get('/administrator/galeri/album/expandgaleri/deletefoto/{ida}/{idp}', 'galericontrol@deletefoto')->middleware('auth');
//delete galeri
Route::get('/administrator/galeri/album/deletegaleri/{id}', 'galericontrol@deletegaleri')->middleware('auth');

Auth::routes();
Route::get('/administrator/logout', '\App\Http\Controllers\Auth\LoginController@logout');


//KAGAK KEPAKE LAGI
//delete data
Route::get('/delete/{id}', 'akunprofile@deletedata');
//edit data
Route::get('/updatedata/{id}', 'akunprofile@panggildataedit');
Route::post('/save/{id}', 'akunprofile@editdata');
//tambah data
Route::get('/tambahdata', 'akunprofile@panggildatatambah')->name('pegawai.create');
Route::post('/add', 'akunprofile@tambahpegawai');
//edit data
Route::get('/editdata/{id}', 'akunprofile@editdata');
//tambah data
Route::get('/tambahakun', 'akunprofile@tambahdata')->name('pegawai.create');

