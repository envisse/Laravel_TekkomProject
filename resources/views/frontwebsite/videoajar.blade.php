<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Ajar</title>
    <link rel="shortcut icon" type="image/png" media="screen" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css_boostrap/bootstrap4/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css_boostrap/bootstrap4/main_style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css_boostrap/bootstrap4/lightbox.min.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('venobox/venobox/venobox.css') }}" type="text/css" media="screen">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #33B6FF;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            transition: 0.3s
        }

        #myBtn:hover {
            background-color: #555;
            transition: 0.3s
        }

        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }
        .instagram {
            background: -webkit-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -webkit-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
            background: -moz-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -moz-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
            background: -ms-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -ms-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
            background: -o-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -o-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
            background: radial-gradient(circle farthest-corner at 32% 106%, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), linear-gradient(135deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);

            color: white
        }
        .google {
            background: #dd4b39;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }
        #navsar {
            background-color: white;
            position: fixed;
            padding-top: 5px;
            z-index: 9;
            top: -500px;
            transition: top 0.5s;
        }
    </style>
</head>
<body>
<nav>
    <div>
        <div class="navbar-brand pt-3 d-flex justify-content-center">
            <img src="{{asset('img/hitam.png')}}" style="height: 60px;object-fit: cover"
                 class="d-inline-block align-top" alt="" loading="lazy">
        </div>
        <div class="shadow-sm topbar d-flex justify-content-center">
            <ul>
                <li class="@yield('active-beranda')">
                    <a href="{{'/beranda'}}"><p>BERANDA</p></a>
                </li>
                <li class="nav-item dropdown @yield('active-profil')">
                    <a href="{{'/profilevm'}}" class="d-flex justify-content-start"><p>PROFILE</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/profilevm'}}">Visi & Misi</a>
                        <a class="dropdown-item" href="{{'/profiletp'}}">Tupoksi</a>
                        <a class="dropdown-item" href="{{'/profileso'}}">Struktur Organisasi</a>
                        <a class="dropdown-item" href="{{'/fasilitas/lt-1'}}">Fasilitas</a>
                    </div>
                </li>
                <li class="nav-item dropdown @yield('active-programkerja')">
                    <a href="{{'/agenda'}}" class="d-flex justify-content-start"><p>PROGRAM KERJA</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/agenda'}}">Agenda</a>
                        <a class="dropdown-item" href="{{'/workresult'}}">Hasil Kerja</a>
                        <a class="dropdown-item" href="{{'/instalasijaringan'}}">Instalasi Jaringan</a>
                        <a class="dropdown-item" href="{{'/liputan'}}">Liputan</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a href="{{'/beranda'}}" class="d-flex justify-content-start"><p>BAHAN AJAR</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/modulajar/SLBN'}}">Modul Bahan Ajar</a>
                        <a class="dropdown-item" href="{{'/videoajar'}}">Video Bahan Ajar</a>
                    </div>
                </li>
                <li class="@yield('active-berita')"><a href="{{'/berita'}}"><p>BERITA</p></a></li>
                <li class=""><a href="{{'/galeri'}}"><p>GALERI</p></a></li>
                <li class="@yield('active-kontak')"><a href="{{'/kontak'}}"><p>KONTAK</p></a></li>
            </ul>
        </div>
        <div class="shadow-sm topbar d-flex justify-content-center" id="navsar">
            <ul>
                <li class="@yield('active-beranda')">
                    <a href="{{'/beranda'}}"><p>BERANDA</p></a>
                </li>
                <li class="nav-item dropdown @yield('active-profil')">
                    <a href="{{'/profilevm'}}" class="d-flex justify-content-start"><p>PROFILE</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/profilevm'}}">Visi & Misi</a>
                        <a class="dropdown-item" href="{{'/profiletp'}}">Tupoksi</a>
                        <a class="dropdown-item" href="{{'/profileso'}}">Struktur Organisasi</a>
                        <a class="dropdown-item" href="{{'/fasilitas/lt-1'}}">Fasilitas</a>
                    </div>
                </li>
                <li class="nav-item dropdown @yield('active-programkerja')">
                    <a href="{{'/agenda'}}" class="d-flex justify-content-start"><p>PROGRAM KERJA</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/agenda'}}">Agenda</a>
                        <a class="dropdown-item" href="{{'/workresult'}}">Hasil Kerja</a>
                        <a class="dropdown-item" href="{{'/instalasijaringan'}}">Instalasi Jaringan</a>
                        <a class="dropdown-item" href="{{'/liputan'}}">Liputan</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a href="{{'/beranda'}}" class="d-flex justify-content-start"><p>BAHAN AJAR</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/modulajar/SLBN'}}">Modul Bahan Ajar</a>
                        <a class="dropdown-item" href="{{'/videoajar'}}">Video Bahan Ajar</a>
                    </div>
                </li>
                <li class="@yield('active-berita')"><a href="{{'/berita'}}"><p>BERITA</p></a></li>
                <li class=""><a href="{{'/galeri'}}"><p>GALERI</p></a></li>
                <li class="@yield('active-kontak')"><a href="{{'/kontak'}}"><p>KONTAK</p></a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="top__section videosection">
    <header class="container pt-5 pb-5">
        <h1 class="col-md-8">BAHAN AJAR</h1>
        <p class="col-md-8">Pada halaman ini menyediakan berbagai bahan ajar berbentuk video. kategori meliputi SLBN,
            SMA, dan SMk bertujuan untuk memudahkan para siswa dalam proses belajar mengajar</p>
    </header>
</section><!-- End Header Section-->

<!-- Content -->
<section class="content__section container">
    <div class="playlist__one col-md">
        <div class="header row pb-3 pt-5 pl-3 pr-3">
            <hr class="line column col-md" style="border: 1px solid black;">
            <h4 class="col-md" style="text-align: center;">SLBN</h4>
            <hr class="line column col-md" style="border: 1px solid black;">
        </div>

        <div class="video">
            <div class="row pt-3">
                @foreach($slbns as $slbn)

                    <div class="col-md-4 ">
                        <div class="contain">
                            <div><img
                                    src="https://i.ytimg.com/vi/{{$slbn->thumbnail_bahan_ajar}}/hq720.jpg?sqp=-oaymwEZCNAFEJQDSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAacJxigSawdMm5VjiPXlRaaipXtg"
                                    class="card-img-top" style="width:100%"></div>
                            <a class="card video venobox vbox-item overlay" data-autoplay="true" data-vbtype="video"
                               href="{{$slbn->url_bahan_ajar}}">
                                <div class=""><img class="card-img-top poptext" src="{{asset('img/play.png')}}" style="width: 25%;
                place-self: center;"></div>
                            </a>
                        </div>
                        <div class="card video venobox vbox-item" data-autoplay="true" data-vbtype="video"
                             href="{{$slbn->url_bahan_ajar}}" data-gall="myGallery" style="border: 0px;">
                            <div class="px-1 pt-2 mb-3 elip">
                                <h5 style="font-size: 15px;font-weight: bold">{{$slbn->judul_bahan_ajar}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div style="margin-left: 40%" class="pagination mt-5">
            {{$slbns->links()}}
        </div>
        <div class="header row pb-3 pt-5 pl-3 pr-3">
            <hr class="line column col-md" style="border: 1px solid black;">
            <h4 class="col-md" style="text-align: center;">SMA</h4>
            <hr class="line column col-md" style="border: 1px solid black;">
        </div>
        <div class="video">
            <div class="row pt-3">
                @foreach($smas as $sma)
                    <div class="col-md-4 ">
                        <div class="contain">
                            <div><img
                                    src="https://i.ytimg.com/vi/{{$sma->thumbnail_bahan_ajar}}/hq720.jpg?sqp=-oaymwEZCNAFEJQDSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAacJxigSawdMm5VjiPXlRaaipXtg"
                                    class="card-img-top" style="width:100%"></div>
                            <a class="card video venobox vbox-item overlay" data-autoplay="true" data-vbtype="video"
                               href="{{$sma->url_bahan_ajar}}">
                                <div class=""><img class="card-img-top poptext" src="{{asset('img/play.png')}}" style="width: 25%;
                place-self: center;"></div>
                            </a>
                        </div>
                        <div class="card video venobox vbox-item" data-autoplay="true" data-vbtype="video"
                             href="{{$sma->url_bahan_ajar}}" data-gall="myGallery" style="border: 0px;">
                            <div class="px-1 pt-2 mb-3 elip">
                                <h5 style="font-size: 15px;font-weight: bold">{{$sma->judul_bahan_ajar}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div style="margin-left: 40%" class="pagination mt-5">
            {{$smas->links()}}
        </div>
        <div class="header row pb-3 pt-5 pl-3 pr-3">
            <hr class="line column col-md" style="border: 1px solid black;">
            <h4 class="col-md" style="text-align: center;">SMK</h4>
            <hr class="line column col-md" style="border: 1px solid black;">
        </div>

        <div class="video">
            <div class="row pt-3">
                @foreach($smks as $smk)

                    <div class="col-md-4 ">
                        <div class="contain">
                            <div><img
                                    src="https://i.ytimg.com/vi/{{$smk->thumbnail_bahan_ajar}}/hq720.jpg?sqp=-oaymwEZCNAFEJQDSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAacJxigSawdMm5VjiPXlRaaipXtg"
                                    class="card-img-top" style="width:100%"></div>
                            <a class="card video venobox vbox-item overlay" data-autoplay="true" data-vbtype="video"
                               href="{{$smk->url_bahan_ajar}}">
                                <div class=""><img class="card-img-top poptext" src="{{asset('img/play.png')}}" style="width: 25%;
                place-self: center;"></div>
                            </a>
                        </div>
                        <div class="card video venobox vbox-item" data-autoplay="true" data-vbtype="video"
                             href="{{$smk->url_bahan_ajar}}" data-gall="myGallery" style="border: 0px;">
                            <div class="px-1 pt-2 mb-3 elip">
                                <h5 style="font-size: 15px;font-weight: bold">{{$smk->judul_bahan_ajar}}</h5>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <div style="margin-left: 40%" class="pagination mt-5">
            {{$smks->links()}}
        </div>
    </div>
</section>

<div class="footer">
    <div class="content container pt-5">
        <div class="row">
            <div class="column col-md-4">
                <h5>UPTD TEKKOM & INFODIK</h5>
                <hr class="line" width="80px" style="margin-bottom: 20px">
                <br>
                <p>UPTD Tekkom & Infodik merupakan Unit Pelaksana Tugas Daerah dalam naungan Dinas Pendidikan dan
                    Kebudayaan Provinsi Kalimantan Timur yang terkait dengan Teknologi dan Informasi Pendidikan.</p>
            </div>
            <div class="column col-md-1"></div>
            <div class="column col-md-3">
                <h5>BERITA TERBARU</h5>
                <hr class="line" width="80px" style="margin-bottom: 20px">
                <ul>
                    @foreach($bfooters as $berita)
                        <li><a href="{{'/berita/'.$berita->id.'/'.$berita->judul_berita}}">{{$berita->judul_berita}}</a>
                        </li>
                        <br>
                    @endforeach
                </ul>
            </div>
            <div class="column col-md-1"></div>
            <div class="column col-md-3">
                <h5>KONTAK</h5>
                <hr class="line" width="80px" style="margin-bottom: 20px">
                <div class="d-flex justify-content-start">
                    <i class="fa fa-phone-square fa-2x mr-3" style="margin-top: 0px;font-weight: normal"></i>
                    <p style="font-weight: normal;margin-top: 5px">0541744946</p>
                </div>
                <div class="d-flex justify-content-start">
                    <i class="fa fa-envelope fa-2x mr-3" style="margin-top: 0px;font-weight: normal"></i>
                    <p style="font-weight: normal;margin-top: 5px">layanan@disdik.kaltimprov.go.id</p>
                </div>
                <div class="d-flex justify-content-start">
                    <i class="fa fa-building fa-2x mr-3" style="margin-top: 0px;font-weight: normal"></i>
                    <p style="font-weight: normal;margin-top: 5px">UPTD TEKKOM & INFODIK</p>
                </div>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid white;">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-hand-o-up" aria-hidden="true"></i></button>
    <div class="icon-bar">
        <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" target="_blank" class="google"><i class="fa fa-google"></i></a>
        <a href="#" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    <p class="pb-3" style="margin: 0; text-align: center;">copyright</p>
</div>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('venobox/venobox/venobox.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(document).ready(function () {
            $('.venobox').venobox();
        });
    });
</script>
    <script>
        mybutton = document.getElementById("myBtn");
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 10) {
                document.getElementById("navsar").style.top = "0";
                mybutton.style.display = "block";
            } else {
                document.getElementById("navsar").style.top = "-500px";
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>
</html>
