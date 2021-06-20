@extends('frontwebsite.layoutfront')

@section('title') Hasil kerja @endsection

@section('active-profil') active @endsection

@section('content')
    <div class="jumbotron jumbotron-fluid fasilitas">
        <div class="container">
            <div class="row">
                <div class="col"><br>
                    <img src="../image/logo.png" style="width: 135px;margin-left: 29rem" alt="">
                    <h2 class="colop text-light"
                        style="font-size: 50px;font-weight: bold;text-align: center;margin-top: 20px">Hasil Kerja</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="terbaru container pb-5">
        <div class=" row mt-5  mb-3" style="padding-bottom: 80px">
            @foreach($hasilkerjas as $hasilkerja)
                <div class="column" style="padding: 20px 25px">
                    <a href="{{'/workresult/'.$hasilkerja->id}}">
                        <div class="card" style="box-shadow: 2px 0px 10px #00000059">
                            <img class="card-img-top" src="{{asset('source/hasilkerja/'.$hasilkerja->path)}}"
                                 style="width:100%;height: 175px;object-fit: cover;margin-bottom: 10px;">
                            <div class="card-body">
                                <h5 class="card-title mt-0">{{$hasilkerja->judul}}</h5>
                                <p><small class="card-text text-muted">{{\Carbon\Carbon::createFromFormat('Y-m-d', $hasilkerja->tanggalpublish)->format('d-m-Y')}}</small></p>
                                <p class="card-text">{!!$hasilkerja->thumbnail_desc  !!}...</p>
                            </div>
                            <hr style="height:5px;color:#33B6FF;background-color:#33B6FF;margin-bottom: 0">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
