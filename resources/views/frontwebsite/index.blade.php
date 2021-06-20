@extends('frontwebsite.layoutfront')

@section('title') BERANDA @endsection

@section('active-beranda') active @endsection

@section('content')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
            nonce="LUHMhvY3"></script>
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($isibanner as $ib)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"
                        class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($isibanner as $ib)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="{{$ib->url}}" target="_blank">
                            <img style="object-fit: cover;height: 620px;"
                                 src="{{asset('source/banner/'.$ib->path_imagebanner)}}"
                                 class="d-block w-100"
                                 alt="...">
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div style="margin-bottom: 100px;margin-top: 100px">
        <div class="media pt-5 pb-5 container" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
            <img src="{{asset('img/index-1.png')}}" class="align-self-center col-5 mr-3" alt="...">
            <div class="media-body col-7">
                <h4 class="mt-0">Apa itu UPTD TEKKOM & INFODIK </h4>
                <p>UPTD Tekkom & Infodik merupakan Unit Pelaksana Tugas Daerah dalam naungan Dinas Pendidikan dak
                    Kebudayaan Provinsi Kalimantan Timur yang terkait dengan Teknologi dan Informasi pendidikan. Kantor
                    yang beralamat di Jalan Biola komplek Preevab No.4 Samarinda memiliki social media yang bisa
                    dimanfaatkan masyarakat dalam penyebaran berupa berita melalui website ini </p>
                <p class="mb-0">Dan kami juga menyediakan layanan internet cepat & aman dengan menggunakan layanan
                    Hotspot/Wifi yang bisa diakses langsung melalui perangkat smartphone/laptop.</p>
            </div>
        </div>
    </div>

    <!-- Container for the image gallery -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-8">
                <h4>BERITA TERBARU</h4>
                <div class="news mt-4">
                    <!-- Full-width images with number text -->
                    <div>
                        @foreach(array_slice($isiberita, 0, 4) as $ib)
                            <div class="mySlides" style="height: 500px">
                                <a href="{{'/berita/'.$ib->id.'/'.$ib->judul_berita}}">
                                    <img href="" src="{{asset('/source/berita/'.$ib->path_thumbnail)}}"
                                         style="width:100%;height: 100%">
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Image text -->
                    <div class="caption-container">
                        <p id="caption" style="text-align: center;"></p>
                    </div>

                    <!-- Thumbnail images -->
                    <div class="mt-3 d-flex justify-content-center"
                         style="width: 100%;">
                        @foreach(array_slice($isiberita, 0, 4) as $ib)
                            <div>
                                <img class="demo cursor" src="{{asset('/source/berita/'.$ib->path_thumbnail)}}"
                                     style="width:165px;height: 120px" onclick="currentSlide({{$loop->index + 1}})"
                                     alt="{{$ib->judul_berita}}">
                                <div class="pl-2 mt-2" style="width:170px;text-align: center;white-space: nowrap">
                                    <p style="overflow: hidden;text-overflow: ellipsis">
                                        <small>{{$ib->judul_berita}}</small></p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>

                <div class="pt-5">
                    <ul class="list-unstyled">
                        <!-- loop hanya dilakukan 4 kali -->
                        @foreach($beritas as $ib)
                            <a style="color: black;text-decoration:none"
                               href="{{'/berita/'.$ib->id.'/'.$ib->judul_berita}}">
                                <div
                                    style="border-bottom-style: solid !important;border-bottom: 2px solid #BABABA !important;">
                                    <li class="media" style="margin-top: 20px;" data-aos="fade-left"
                                        data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                                        <img src="{{asset('/source/berita/'.$ib->path_thumbnail)}}" class="mr-3 col-3"
                                             alt="..." style="width: 300px;height: 130px; object-fit: fill">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">{{$ib->judul_berita}}</h5>
                                            <p>
                                                <small>{{\Carbon\Carbon::createFromFormat('Y-m-d', $ib->tanggalpublish)->format('d-m-Y')}}</small>
                                            </p>
                                            <div class="text-muted">{!!$ib->isi_thumbnail  !!}...</div>
                                        </div>
                                    </li>
                                </div>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div  style="margin-left: 20px;padding-right: 0px;">
                <h4 data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">AGENDA</h4>
                <ul class="list-unstyled pt-3" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-once="true">
                    @foreach($agendas as $agenda)
                        @if($agenda->end != null)
                            <li>

                                <a href="{{'agenda/'.$agenda->id}}"><p>{{$agenda->nama_agenda}}</p> </a>
                                <p><small
                                        class="text-muted">{{\Carbon\Carbon::createFromFormat('Y-m-d', $agenda->tanggalmulai)->format('d-m-Y')}}
                                        sd {{\Carbon\Carbon::createFromFormat('Y-m-d', $agenda->tanggalselesai)->format('d-m-Y')}}</small>
                                </p>

                            </li>
                        @else
                            <li>
                                <a href="{{'agenda/'.$agenda->id}}"><p>{{$agenda->nama_agenda}}</p> </a>
                                <p><small
                                        class="text-muted">{{\Carbon\Carbon::createFromFormat('Y-m-d', $agenda->tanggalmulai)->format('d-m-Y')}}
                                        sd Selesai</small>
                                </p>
                            </li>
                        @endif
                    @endforeach
                    {{--              limit 7--}}
                </ul>
                <div class="fb-page" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                     data-href="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983"
                     data-tabs="timeline" data-width="300" data-height="500" data-small-header="false"
                     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983"
                                class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983">Dinas
                            Pendidikan dan Kebudayaan Kaltim</a></blockquote>
                </div>
            </div>

        </div>
    </div>

    <div class="gallery">
        <div class="container">
            <div class="photo col-12 pt-5">
                <!-- Header -->
                <div class="header row pb-3 pt-5 pl-3 pr-3">
                    <hr class="line column col-md">
                    <h1 class="col-md" style="text-align: center;">PHOTO</h1>
                    <hr class="line column col-md">
                </div>

                <!-- Photo Grid -->
                <div class="row">
                    <div class="column">
                        @foreach($photo1 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000" data-aos-once="true">
                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda">
                                    <img src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                         class="img1 galleryanim"
                                         style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo2 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-once="true">
                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}" data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="img2 galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo3 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">
                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}" data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="img4 galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="column">
                        @foreach($photo4 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}" data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo5 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo6 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo7 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="column">
                        @foreach($photo8 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="700" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo9 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-once="true">
                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}" data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="img2 galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo10 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">
                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}" data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="img4 galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                    </div>
                    <div class="column">
                        @foreach($photo11 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo12 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="700" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo13 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                        @foreach($photo14 as $photo)
                            <div data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1000" data-aos-once="true">

                                <a href="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                   data-title="{{$photo->img_name}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}"
                                        class="galleryanim" style="width:100%"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <p class="pt-5" style="text-align: center !important;"><a href="{{'/galeri'}}">LIHAT SELENGKAPNYA</a>
                </p>
            </div>

            <div class="video col-12 pt-3 pb-5">
                <!-- Header -->
                <div class="header row pb-3 pt-5 pl-3 pr-3">
                    <hr class="line column col-md">
                    <h1 class="col-md" style="text-align: center;">VIDEO</h1>
                    <hr class="line column col-md">
                </div>
                @foreach($videos as $video)
                    <div>
                        <iframe class="mx-auto d-block mt-5" width="880" height="495"
                                src="https://www.youtube.com/embed/{{$video->thumbnail_video}}?autoplay=0"
                                allowfullscreen></iframe>

                    </div>
                @endforeach
                <p class="pt-5" style="text-align: center !important;"><a href="{{'/galeri'}}">LIHAT SELENGKAPNYA</a>

            </div>
        </div>
    </div>

    <div class="container tautan">
        <h1 class="col-md" style="text-align: center;">TAUTAN</h1>
        <hr class="line" width="155px">
        <div class="pt-3">
            <div class="row">
                @foreach($tautans as $tautan)
                    <div class="column">
                        <a href="{{$tautan->url_tautan}}"><img src="{{asset('source/tautan/'.$tautan->image_tautan)}}"
                                                               style="width:100%"></a>
                    </div>
                @endforeach
            </div>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>

@endsection
