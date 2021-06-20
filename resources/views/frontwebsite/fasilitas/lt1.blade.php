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
                                <a href="#" class="nav-link active"
                                   style="text-align:center;background-color: white;color: black;font-weight: bold">Lantai
                                    1</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{'/fasilitas/lt-2'}}" class="nav-link"
                                   style="text-align:center;color: white;font-weight: bold">Lantai 2</a>
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
             data-aos-once="true" style="padding-bottom: 7em;padding-top: 6em">
            <div class="col-6">
                <div class="contain">
                    <div><img src="{{asset('img/frontoffice/1.jpg')}}" class="imh imgal1"
                              style="width:100%;height: 355px"></div>
                    <a class="overlay" href="{{asset('img/frontoffice/1.jpg')}}" data-lightbox="gallery01"
                       data-title="wdadasdadawdw">
                        <div class="poptext"><i class="fa fa-search fa-5x"></i></div>
                    </a>
                </div>
            </div>
            <a href="{{asset('img/frontoffice/2.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>
            <a href="{{asset('img/frontoffice/3.jpg')}}" data-title="wdadasdadawdw" data-lightbox="gallery01"></a>

            <div class="media-body col-7">
                <h5 class="mt-0" style="font-size: 35px;margin-bottom: 20px;">Front Office</h5>
                <p>Ruangan yang berada di depan kantor yang berfungsi untuk mengkoordinasikan keperluan tamu, penerimaan
                    surat masuk dan sebagai ruang tunggu</p>
            </div>
        </div>
    </div>
@endsection
