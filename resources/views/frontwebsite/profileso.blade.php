@extends('frontwebsite.layoutfront')

@section('title') STRUKTUR ORGANISASI @endsection
@section('active-profil') active @endsection

@section('content')

    <div class="profil container">
        <div class="row">
            <div class="tupoksi col-md-8">
                <h4>Struktur Organisasi</h4>
                <hr style="height:2px;color:#33B6FF;background-color:#33B6FF">
                <div class="so pt-5">
                    <img src="{{asset('img/Struktur Organisasi.png')}}" class="pb-3" width="100%">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="berita col-md-3">
                <h4>Berita Terbaru</h4>
                <hr style="height:2px;color:#33B6FF;background-color:#33B6FF">
                <ul class="list-unstyled">
                    <!-- loop hanya dilakukan 4 kali -->
                    @foreach(array_slice($isiberita, 0, 5) as $ib)
                        <a href="{{'/berita/'.$ib->id.'/'.$ib->judul_berita}}">
                            <li class="media">
                                <img src="{{asset('/source/berita/'.$ib->path_thumbnail)}}"
                                     style="width: 50%;height: 70px" class="mr-3" alt="...">
                                <div class="media-body">
                                    <p>{{$ib->judul_berita}}</p>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
                <div class="link pt-5">
                    <a href="{{'/profilevm'}}"><p>VISI & MISI</p></a>
                    <a href="{{'/profiletp'}}"><p>TUPOKSI</p></a>
                    <a href="{{'/profileso'}}" style="color: #33B6FF;"><p>STRUKTUR ORGANISASI</p></a>
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
