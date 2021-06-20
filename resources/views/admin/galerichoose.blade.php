@extends('admin.tampilanadmin')
@section('section') Galery @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-section') Galery @endsection

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5" style="padding-right:0px">
                <a href="{{'/administrator/galeri/album'}}">
                    <div class="card gale">
                        <div class="card-body" style="">
                            <center>
                                <i  class="fa fa-image fa-fw" style="font-size: 60px;"></i>
                                <h5 class="card-title" style="font-size:75px;">{{count($countgaleri)}}</h5>
                                <p class="card-text" style="font-size:25px;">Album</p>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5" style="padding-left:0px">
                <a href="{{'/administrator/galeri/video'}}">
                    <div class="card gale2" style="">
                        <div class="card-body" style="">
                            <center>
                                <i class="fa fa-video-camera fa-fw" style="font-size: 60px;"></i>
                                <h5 class="card-title" style="font-size:75px;">{{count($countvideo)}}</h5>
                                <p class="card-text" style="font-size:25px;">Video</p>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
