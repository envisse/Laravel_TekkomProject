@extends('frontwebsite.layoutfront')

@section('title') Detail Agenda @endsection

@section('active-programkerja') active @endsection

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
            nonce="LUHMhvY3"></script>
    <body>
    <div class="profil container" style="padding-top: 40px;padding-bottom: 100px">
        @foreach($agendas as $agenda)
            <div class="row">
                <div class="visimisi col-md-8">
                    <h4>Detail Agenda</h4>
                    <hr style="height:2px;color:#33B6FF;background-color:#33B6FF">
                    <div class="pt-2">
                        <h3 class="pb-3" style="font-weight: bold">{{$agenda->nama_agenda}}</h3>
                    </div>
                    <div class="row" style="margin-top: 40px">
                        <div class="col-md-6" style="padding-left: 0">
                            <a style="font-size: 15px"><i class="fa fa-fw fa-calendar fa-2x"
                                                          style="color: red;padding-right: 6px"></i>{{\Carbon\Carbon::parse($agenda->tanggalmulai)->translatedFormat('d-m-Y')}}
                                -
                                {{\Carbon\Carbon::parse($agenda->tanggalselesai)->translatedFormat('d-m-Y')}}</a>
                        </div>
                        <div class="col-md-6" style="padding-left: 0">
                            <a style="font-size: 15px"><i class="fa fa-fw fa-clock-o fa-2x"
                                                          style="color: red;padding-right: 6px"></i>{{$agenda->start}} -
                                {{$agenda->end}}</a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 40px">
                        <a style="font-size: 15px"><i class="fa fa-fw fa-map-marker fa-2x"
                                                      style="color: red;padding-right: 6px"></i>{{$agenda->alamat}}</a>
                    </div>
                    <div class="pt-5">
                        <ol style="padding: 0px;">
                            <div style="font-size: 16px">{!!$agenda->desc_agenda  !!}</div>
                        </ol>
                    </div>
                </div>
                @endforeach
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
    </body>
@endsection
