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
</head>
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
                <li class="nav-item dropdown @yield('active-bahanajar')">
                    <a href="{{'/beranda'}}" class="d-flex justify-content-start"><p>BAHAN AJAR</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/modulajar/SLBN'}}">Modul Bahan Ajar</a>
                        <a class="dropdown-item" href="{{'/videoajar'}}">Video Bahan Ajar</a>
                    </div>
                </li>
                <li class="@yield('active-berita')"><a href="{{'/berita'}}"><p>BERITA</p></a></li>
                <li class="active"><a href="{{'/galeri'}}"><p>GALERI</p></a></li>
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
                <li class="nav-item dropdown @yield('active-bahanajar')">
                    <a href="{{'/beranda'}}" class="d-flex justify-content-start"><p>BAHAN AJAR</p><i
                            class="fa fa-angle-down" style="padding-left: 5px;padding-top: 5px"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'/modulajar/SLBN'}}">Modul Bahan Ajar</a>
                        <a class="dropdown-item" href="{{'/videoajar'}}">Video Bahan Ajar</a>
                    </div>
                </li>
                <li class="@yield('active-berita')"><a href="{{'/berita'}}"><p>BERITA</p></a></li>
                <li class="active"><a href="{{'/galeri'}}"><p>GALERI</p></a></li>
                <li class="@yield('active-kontak')"><a href="{{'/kontak'}}"><p>KONTAK</p></a></li>
            </ul>
        </div>
    </div>
</nav>
<script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<div>
    <div class="galerif">
        <div class="container">
            <div class="container">
                <h1 style="text-align: center;padding-top: 7%">ALBUM</h1>
            </div>
            <div class="row">
                <!-- Foto Pertama di Galeri  -->
                @foreach($galeris as $galeri)
                    @php $i = 1; @endphp
                    @foreach($galeri->photo as $photo)
                        @if($i == 1)
                            <div class="column">
                                <div class="contain">
                                    <div><img src="/source/eventphoto/{{$galeri->id}}/{{$photo->img_name}}"
                                              class="imh imgal1" style="width:100%"></div>
                                    <a class="overlay" href="/source/eventphoto/{{$galeri->id}}/{{$photo->img_name}}"
                                       data-lightbox="{{$galeri->id}}" data-title="{{$photo->img_name}}">
                                        <div class="poptext">{{$galeri->name}}</div>
                                    </a>
                                </div>
                            </div>
                        @else
                            <a href="/source/eventphoto/{{$galeri->id}}/{{$photo->img_name}}"
                               data-title="{{$photo->img_name}}" data-lightbox="{{$galeri->id}}"></a>
                        @endif
                        @php $i = $i + 1; @endphp
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <div style="margin-left: 42%" class="pagination mt-5">
        {{$galeris->links()}}
    </div>
</div>
</div>
<div class="container">
    <section class="content_section">
        <div class=" playlist_one">
            <div class="container">
                <h1 style="text-align: center;padding-top: 7%">VIDEO</h1>
            </div>
            <div class="video">
                <div class="row" style="padding-top:6% ">
                    @foreach($videos as $video)
                        <div class="col-sm-4 ">
                            <div class="contain">
                                <div><img
                                        src="https://i.ytimg.com/vi/{{$video->thumbnail_video}}/hq720.jpg?sqp=-oaymwEZCNAFEJQDSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAacJxigSawdMm5VjiPXlRaaipXtg"
                                        class="card-img-top" style="width:100%"></div>
                                <a class="card video venobox vbox-item overlay" data-autoplay="true" data-vbtype="video"
                                   href="{{$video->url_video}}">
                                    <div class=""><img class="card-img-top poptext" src="{{asset('img/play.png')}}"
                                                       style="width: 25%;
                place-self: center;"></div>
                                </a>
                            </div>
                            <div class="card video venobox vbox-item" data-autoplay="true" data-vbtype="video"
                                 href="{{$video->url_video}}" data-gall="myGallery" style="border: 0px;">
                                <div class="px-1 pt-2 mb-3 elip">
                                    <h5 style="font-size: 15px;font-weight: bold">{{$video->judul_video}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div style="margin-left: 38%" class="pagination mt-5">
                    {{$videos->links()}}
                </div>
            </div>
        </div>
    </section>
</div>
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
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('venobox/venobox/venobox.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(document).ready(function () {
            $('.venobox').venobox();
        });
    });
</script>
</body>

