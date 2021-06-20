@extends('frontwebsite.layoutfront')

@section('title') AGENDA @endsection

@section('active-programkerja') active @endsection

@section('content')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
            nonce="LUHMhvY3"></script>

    <section class="top__section jaringan">
        <header class="container pt-3 pb-3">
            <h2 class="col-md-12 " style="text-align: end;padding-bottom: 20px">FASILITAS JARINGAN INTERNET SEKOLAH</h2>
            <DIV class="row">
                <p class="col-md-4" style="text-align: end"></p>
                <p class="col-md-8" style="text-align: end">Kami dapat menyediakan jasa instalasi jaringan utuk beberapa
                    sekolah dengan spesifikasi speed sebesar 9 Mbps dengan menggunakan IP public masing-masing</p>
            </DIV>

        </header>
    </section>

    <div class="profil container" style="padding-bottom: 20px">
        <div class="row">
            <div class="visimisi col-12">
                <h4>Daftar Sekolah Penerima Fasilitas</h4>
                <hr style="height:4px;color:#33B6FF;background-color:#33B6FF">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="misi pt-2" style="font-size: initial">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                           width="100%">
                        <thead style="background-color:#33B6FF;color:white">
                        <tr style="background-color: #33B6FF">
                            <th class="th-sm" style="width: 10px">
                                <div class="d-flex justify-content-between">
                                    No<i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                                </div>
                            </th>
                            <th class="th-sm">
                                <div class="d-flex justify-content-between">
                                    Nama Sekolah<i class="fa fa-caret-down" aria-hidden="true"
                                                   style="padding-top: 5px"></i>
                                </div>
                            </th>
                            <th class="th-sm">
                                <div class="d-flex justify-content-between">
                                    Kota<i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                                </div>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1;@endphp
                        @foreach($networks as $network)
                            <tr>
                                <td>@php echo ($i);@endphp</td>
                                <td>{{$network->nama_sekolah}}</td>
                                <td>{{$network->kota_sekolah}}</td>
                                @php $i++;@endphp
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="berita" style="margin-left: 20px;width: 300px">
                @foreach($tautans as $tautan)
                    <a href="{{$tautan->url_tautan}}" target="_blank"><img class="mb-3"
                                                                           src="{{asset('source/tautan/'.$tautan->image_tautan)}}"
                                                                           style="width:100%; height: 75px;"></a>
                @endforeach

                <div class="pt-3">
                    <div class="fb-page"
                         data-href="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983"
                         data-tabs="timeline" data-width="400" data-height="600" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote
                            cite="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983">Dinas
                                Pendidikan dan Kebudayaan Kaltim</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery" style="background-color: #EDEDED">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-9">
                    <h4 style="color: black">GALERI PEMASANGAN FASILITAS</h4>
                    <hr style="height:4px;color:#33B6FF;background-color:#33B6FF">
                </div>
            </div>
            <div class="row" style="padding-bottom: 30px">
                <div class="photo col-12">
                    <!-- Photo Grid -->
                    <div class="row">
                        <div class="column">
                            <div>
                                @foreach($photo1 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="img1 galleryanim" style="width:100%"></a>
                                    @endforeach
                            </div>

                            <div>
                                @foreach($photo2 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="img2 galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>

                            <div>
                                @foreach($photo3 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="img4 galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>
                            <div>
                                @foreach($photo4 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>
                        </div>

                        <div class="column">
                            <div>
                                @foreach($photo5 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%;height: 18rem;object-fit: cover;"></a>
                                @endforeach
                            </div>

                            <div>
                                @foreach($photo6 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>

                            <div>
                                @foreach($photo7 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>
                        </div>

                        <div class="column">
                            <div >
                                @foreach($photo8 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>
                            <div>
                                @foreach($photo9 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%;height: 34rem;object-fit: cover;"></a>
                                @endforeach
                            </div>
                            <div>
                                @foreach($photo10 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>
                        </div>
                        <div class="column">
                            <div >
                                @foreach($photo11 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>

                            <div >
                                @foreach($photo12 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%;height: 18rem;object-fit: cover;"></a>
                                @endforeach
                            </div>

                            <div>
                                @foreach($photo13 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}"
                                   data-title="{{$photo->desc_foto}}" data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>

                            <div>
                                @foreach($photo14 as $photo)
                                <a href="/source/ops_jaringan/{{$photo->path_foto}}"
                                   data-title="{{$photo->desc_foto}}" data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
