@extends('frontwebsite.layoutfront')

@section('title') Fasilitas @endsection

@section('active-profil') active @endsection

@section('content')

    <div>
        <div class="jumbotron jumbotron-fluid fasilitas">
            <div class="container">
                <div class="row">
                    <div class="col" style="filter: brightness(100%) !important;"><br>
                        <h2 class="colop text-light" style="font-size: 50px;font-weight: bold">FASILITAS</h2>
                        <p style="color: white;">Segala fasilitas yang dimiliki oleh TEKKOM</p>
                        <ul class="nav nav-pills nav-fill" style="position: absolute;padding-top: 57px;width: 380px;">
                            <li class="nav-item">
                                <a href="{{'/fasilitas/lt-1'}}" class="nav-link"
                                   style="text-align:center;color: white;font-weight: bold">Lantai
                                    1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active"
                                   style="text-align:center;background-color: white;color: black;font-weight: bold">Lantai
                                    2</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{'/fasilitas/lt-3'}}" class="nav-link"
                                   style="text-align:center;color: white;font-weight: bold">Lantai 3</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="media container" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000"
             data-aos-once="true" style="padding-bottom: 7em;padding-top: 7em">
            <div class="col-6">
                <div class="contain">
                    <div><img src="{{asset('img/multimedia/2.jpg')}}" class="imh imgal1"
                              style="width:100%;height: 355px"></div>
                    <a class="overlay" href="../image/Featured-Image-Dio-Brando-Cropped.jpg" data-lightbox="gallery01"
                       data-title="wdadasdadawdw">
                        <div class="poptext"><i class="fa fa-search fa-5x"></i></div>
                    </a>
                </div>
            </div>
            <a href="{{asset('img/studio/1.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>
            <a href="{{asset('img/studio/3.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>
            <div class="media-body col-7">
                <h5 class="mt-0" style="font-size: 35px;margin-bottom: 20px;">Ruang Radio</h5>
                <p>Ruang radio merupakan ruang yang berisi perangkat siaran untuk radio streaming dan pembuatan berita
                    tentang dunia pendidikan dan kebudayaan yang ada di Provinsi Kalimantan Timur.</p>
            </div>
        </div>
        <div class="media-my" style="padding-bottom: 7em;padding-top: 7em">
            <div class="media pt-5 pb-5 container" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000"
                 data-aos-once="true">
                <div class="media-body col-7">
                    <h5 class="mt-0 mb-1" style="font-size: 35px;margin-bottom: 20px !important;">Ruang Studio
                        Siaran</h5>
                    <p>Ruangan yang memiliki fungsi untuk melakukan liputan dan siaran tentang informasi pendidikan yang
                        mana hasil liputan tersebut akan dibagikan secara luas ke masyarakat melalui website.</p>
                    <p class="mb-0">Memiliki fasilitas lengkap untuk menunjang kinerja dari bagian infodik, mulai dari
                        pencahayaan yang baik, stage panggung, dan kamera yang baik, dan ruang control yang lengkap.</p>
                </div>
                <div class="col-6">
                    <div class=" contain">
                        <div><img src="{{asset('img/studio/2.jpg')}}" class="imh imgal1"
                                  style="width:100%;height: 355px"></div>
                        <a class="overlay" href="{{asset('img/studio/2.jpg')}}"
                           data-lightbox="gallery01" data-title="wdadasdadawdw">
                            <div class="poptext"><i class="fa fa-search fa-5x"></i></div>
                        </a>
                    </div>
                </div>
                <a href="{{asset('img/studio/1.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>
                <a href="{{asset('img/studio/3.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>
            </div>
        </div>
        <div class="media container" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000"
             data-aos-once="true" style="padding-bottom: 7em;padding-top: 7em">
            <div class="col-6">
                <div class="contain">
                    <div><img src="{{asset('img/multimedia/2.jpg')}}" class="imh imgal1"
                              style="width:100%;height: 355px"></div>
                    <a class="overlay" href="../image/Featured-Image-Dio-Brando-Cropped.jpg" data-lightbox="gallery01"
                       data-title="wdadasdadawdw">
                        <div class="poptext"><i class="fa fa-search fa-5x"></i></div>
                    </a>
                </div>
            </div>
            <a href="{{asset('img/studio/1.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>
            <a href="{{asset('img/studio/3.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>
            <div class="media-body col-7">
                <h5 class="mt-0" style="font-size: 35px;margin-bottom: 20px;">Ruang Video Editing</h5>
                <p>Ruangan untuk melakukan proses editing video dan audio hasil dari lupan yang dilakukan bagian
                    Informasi pendidikan yang kemudia hasilnya akan diupload ke website, social media, maupun TV Edukasi.</p>
            </div>
        </div>
    </div>
@endsection
