@extends('frontwebsite.layoutfront')

@section('title') Detail Hasil Kerja @endsection

@section('active-programkerja') active @endsection

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
            nonce="LUHMhvY3"></script>
    <body>
    <div class="profil container" style="padding-top: 40px;padding-bottom: 100px">
        @foreach($hasilkerjas as $hasilkerja)
            <div class="row">
                <div class="visimisi col-md-8">
                    <h4>HASIL KERJA</h4>
                    <hr style="height:2px;color:#33B6FF;background-color:#33B6FF">

                    <h4>{{$hasilkerja->judul}}</h4>
                    <div class="d-flex justify-content-start mt-3">
                        <i class="fa fa-calendar-o fa-2"
                           style="margin-top: 2px;font-weight: normal;padding-right: 5px;color: #4993ff"></i>
                        <p class="text-muted"
                           style="font-size: 14px;padding-bottom: 10px">{{\Carbon\Carbon::parse($hasilkerja->tanggalpublish)->translatedFormat('l, d F Y')}}</p>
                    </div>

                    <div style="">
                        <img class="mb-4" src="{{asset('source/hasilkerja/'.$hasilkerja->path)}}" style="width:100%">
                    </div>

                    <div class="pt-5">
                        <ol style="padding: 0px;font-size: 17px">
                            {!!$hasilkerja->desc!!}
                        </ol>
                    </div>
                    @endforeach
                    <div class="row">
                        @foreach($opshasilkerjas as $opshasilkerja)
                            <a href="/source/ops_hasilkerja/{{$opshasilkerja->hasilkerja_id}}/{{$opshasilkerja->path}}"
                               data-title="{{$opshasilkerja->path}}"
                               data-lightbox="galleryberanda"><img
                                    src="/source/ops_hasilkerja/{{$opshasilkerja->hasilkerja_id}}/{{$opshasilkerja->path}}"
                                    class="galleryanim" width="350" height="350" style="padding-top: 20px;padding-right: 10px"></a>
                        @endforeach
                    </div>
                </div>

                <div class="col-sm-4">
                    @foreach($tautans as $tautan)
                        <div class="pt-1">
                            <a href="{{$tautan->url_tautan}}" target="_blank"><img class="mb-3"
                                                                                   src="{{asset('source/tautan/'.$tautan->image_tautan)}}"
                                                                                   style="width:100%; height: 75px;"></a>
                        </div>
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
    <div class="terbaru container pb-5">
        <h2 style="text-align: center;">Berita Terbaru</h2>
        <div class="row mt-5  mb-3">
            @foreach($another as $berita_terbaru)
                <div class="column">
                    <a href="{{'/berita/'.$berita_terbaru->id.'/'.$berita_terbaru->judul_berita}}">
                        <img src="{{asset('source/berita/'.$berita_terbaru->path_thumbnail)}}"
                             style="width:100%;height: 160px;object-fit: cover;">
                        <h5 style="padding-top: 20px" class="mt-0">{{$berita_terbaru->judul_berita}}</h5>
                        <div class="d-flex justify-content-start">
                            <i class="fa fa-calendar-o fa-2"
                               style="margin-top: 2px;font-weight: normal;padding-right: 5px;color: #4993ff"></i>
                            <p><small class="text-muted">{{$berita_terbaru->tanggalpublish}}</small></p>
                        </div>
                        <div class="text-muted" style="font-size: 14px">{!!$berita_terbaru->isi_thumbnail  !!}...</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
