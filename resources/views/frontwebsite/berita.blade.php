@extends('frontwebsite.layoutfront')

@section('title') BERITA @endsection
@section('active-berita') active @endsection

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
            nonce="LUHMhvY3"></script>

    <div class="container">
        <h1 style="text-align: center;padding-top: 7%">BERITA</h1>
    </div>

    <!-- Container for the image gallery -->
    <div class="utama container pt-5 pb-5">
        <div class="row pb-3 mt-5">
            <div class="col-8">
                @foreach($beritas as $berita)
                    <a style="color: black;text-decoration: none"
                       href="{{'/berita/'.$berita->id.'/'.$berita->judul_berita}}">
                        <div class="row" style="margin-bottom: 10px">
                            <div class="card">
                                <div class="row" style="margin-bottom: 7px">
                                    <div class="column" style="max-width: 25%">
                                        <img src="{{asset('source/berita/'.$berita->path_thumbnail)}}"
                                             style="object-fit: cover;height: 130px;width:100%">
                                    </div>
                                    <div class="media-body" style="margin-right: 10px">
                                        <h5 class="mt-0 mb-1">{{$berita->judul_berita}}</h5>
                                        <p class="text-muted">
                                            <small>{{\Carbon\Carbon::createFromFormat('Y-m-d', $berita->tanggalpublish)->format('d-m-Y')}}</small>
                                        </p>
                                        <div class="text-muted">{!!$berita->isi_thumbnail  !!}...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="col-12 d-flex justify-content-center">
                    {{$beritas->links()}}
                </div>
            </div>

            <div class="col-1"></div>

            <div class="col-3">
                <h4>Berita Terbaru</h4>
                <ul class="list-unstyled pt-3">
                    @foreach($beritas2 as $berita2)
                        <li>
                            <a href="{{'/berita/'.$berita2->id.'/'.$berita2->judul_berita}}">{{$berita2->judul_berita}}</a>
                            <p><small
                                    class="text-muted">{{\Carbon\Carbon::createFromFormat('Y-m-d', $berita2->tanggalpublish)->format('d-m-Y')}}</small>
                            </p>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-5">
                    <div class="fb-page"
                         data-href="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983"
                         data-tabs="timeline" data-width="300" data-height="550" data-small-header="false"
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
