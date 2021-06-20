<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css_boostrap/bootstrap3/admin.css') }}">
    <link rel="stylesheet" href="{{asset('css_boostrap/bootstrap3/bootstrap.css')}}"  >
    <link rel="stylesheet" href="{{asset('css_boostrap/bootstrap3/sb-admin.css')}}" rel="stylesheet"  >
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" >
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <img style="padding-left:4px" src="{{asset('img/big-modelw2.png')}}" height="50px" width="220px" alt="" >
        </div>
        <ul class="nav navbar-right top-nav">
            <a class="navbar-brand" href="{{'/beranda'}}">GO TO WEBSITE</a>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav" style="padding-top:2%">
                <div class="mx-auto my-auto">
                    <center>
                        <img src="{{asset('source/pegawai/'.$user->foto_pegawai)}}" style="height:140px;width:140px;border-radius:50%;background-size:cover" alt="">
                        <br><br>
                        <li>
                            <p style="margin-bottom: 0px" class="text-muted">{{$user->nama_pegawai}}</p>
                            <p class="text-muted">{{$user->tipe_admin}}</p>
                        </li>
                        <br>
                        <center>
                </div>
                <li>
                    <a href="{{'/administrator/dashboard'}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{'/administrator/banner'}}"><i class="fa fa-fw fa-image"></i> Banner</a>
                </li>
                <li>
                    <a href="{{'/administrator/listberita'}}"><i class="fa fa-fw fa-newspaper-o"></i> Berita</a>
                </li>
                <li>
                    <a href="{{'/administrator/listhasilkerja'}}"><i class="fa fa-fw fa-newspaper-o"></i> Hasil Kerja</a>
                </li>
                <li>
                    <a href="{{'/administrator/galeri'}}"><i class="fa fa-image fa-fw "></i> Galery</a>
                </li>
                <li>
                    <a href="{{'/administrator/tautan'}}"><i class="fa fa-image fa-fw "></i> Tautan</a>
                </li>
                <li>
                    <a href="{{'/administrator/agenda'}}"><i class="fa fa-tags fa-fw "></i> Agenda</a>
                </li>
                <li>
                    <a href="{{'/administrator/bahanajar'}}"><i class="fa fa-laptop fa-fw "></i> Bahan Ajar</a>
                </li>
                <li>
                    <a href="{{'/administrator/e-book'}}"><i class="fa fa-download fa-fw "></i> Link E-book</a>
                </li>
                <li>
                    <a href="{{'/administrator/network'}}"><i class="fa fa-wifi fa-fw "></i> Instalasi jaringan </a>
                </li>
                @can('control akun')
                <li>
                    <a href="{{'/administrator/account'}}"><i class="fa fa-gear fa-fw "></i> Pengaturan Akun</a>
                </li>
                @endcan
                <li>
                    <a href="{{'/administrator/logout'}}"><i class="fa fa-sign-out fa-fw "></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="text-editor.js"></script>
            <form  action="" method="post">
                <div class="" id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header" style="margin-bottom: 5px">
                                    Selamat Datang  {{$user->nama_pegawai}}
                                </h1>
                            </div>
                        </div>

                        <div>
                            <h3>Dashboard</h3>
                        </div>
                        <div style="font-size: 15px;font-weight:;margin-bottom: 20px">
                            <?php
                            setlocale (LC_TIME, 'id');
                            $date = strftime( "%A, %d %B %Y", time());

                            echo  $date . "<br>";
                            ?>
                        </div>
            </form>
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow p3 mb-5 bg-white rounde">
                        <center>
                            <img src="{{asset('source/pegawai/'.$user->foto_pegawai)}}" style="height:160px;width:160px;border-radius:50%;background-size:cover;margin-top: 25px" alt="">
                            <div class="card-body">
                                <h3 class="card-title">{{$user->nama_pegawai}}</h3>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="card"style="border:none;">
                            <a href="{{'/administrator/galeri/album'}}">
                                <div class="card" style="height: 117px;margin-bottom:20px;border:none;background-image: linear-gradient(to right,#667eea,#764ba2);">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5 class="" style="color:white;font-size: 45px;margin-bottom: 1px;">{{count($album)}}</h5>
                                                <p style="color:white;font-size: 20px;">Album</p>
                                            </div>
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-3">
                                                <i class="fa fa-image fa-fw" style="font-size: 87px;color: #9a76bf;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{'/administrator/listberita'}}">
                                <div class="card" style="height: 117px;margin-bottom:20px;border:none;background-image: linear-gradient(to right,#B7F8D8,#50A7C2);">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5 class="" style="color:white;font-size: 45px;margin-bottom: 1px;">{{count($berita)}}</h5>
                                                <p style="color:white;font-size:20px;">Berita</p>
                                            </div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-3">
                                                <i  class="fa fa-fw fa-newspaper-o" style="font-size: 87px;color: #8ecee2;"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card"style="border:none;">
                            <a href="{{'/administrator/galeri/video'}}">
                                <div class="card" style="height: 117px;margin-bottom:20px;border:none;background-image: linear-gradient(to right,#ff7eb3,#ff758c);">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5 class="" style="color:white;font-size: 45px;margin-bottom: 1px;">{{count($video)}}</h5>
                                                <p style="color:white;font-size:20px;">Video</p>
                                            </div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-3">
                                                <i class="fa fa-video-camera fa-fw" style="font-size: 87px;color:#fb9ec4;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{'/administrator/bahanajar'}}">
                                <div class="card" style="height: 117px;margin-bottom:20px;border:none;background-image: linear-gradient(to right,#a3bded,#6991c7);">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h5 class="" style="color:white;font-size: 45px;margin-bottom: 1px;">{{count($bahan_ajar)}}</h5>
                                                <p style="color:white;font-size:20px;">Bahan Ajar</p>
                                            </div>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <i  class="fa fa-fw fa-laptop" style="font-size: 87px;color: #8ecee2;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
