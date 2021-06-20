@extends('admin.tampilanadmin')
@section('section') Galery @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-section') Galery @endsection
@section('tab-tab-section') {{$galeri->name}} @endsection
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <h3 class="m-0">Event : {{$galeri->name}}</h3>
            <div class="d-flex justify-content-start">
                @if(count($galeri->photo) < 6)
                    <a type="button" href="{{'/administrator/galeri/album/expandgaleri/tambahfotogaleri/'.$galeri->id}}"
                       class="btn btn-primary" style="background-color:#33B6FF;margin-bottom: 18px;margin-right: 18px;">Upload
                        Foto</a>
                @else
                    <a type="button" href="#" onclick="return confirm('maksimal 6 foto')"
                       class="btn btn-primary" style="background-color:#33B6FF;margin-bottom: 18px;margin-right: 18px;">Upload
                        Foto</a>
                @endif

            </div>
        </div>
        @if(count($galeri->photo) > 0)
            <div class="row">
                @foreach($galeri->photo as $photo)
                    <div class="col-sm-4 ">
                        <div class="card mb-1">
                            <img class="card-img-top"
                                 src="/source/eventphoto/{{$photo->galeri_id}}/{{$photo->img_name}}" alt=""
                                 style="height:200px">
                            <div class="card-img-overlay" style="background-color: #0c030670;top: 69%;">
                                <div class="row">
                                    <div class="col-md-9">
                                        <a style="color:white">{{$photo->img_name}}</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="fa fa-trash" style="font-size: 205.5%;color: red;"
                                           href="{{'/administrator/galeri/album/expandgaleri/deletefoto/'.$galeri->id.'/'.$photo->id}}"
                                           onclick="return confirm('Apakah Anda Yakin')"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Tidak ada album yang ditampilkan</p>
        @endif
    </div>
    </div>
    </body>
@endsection
