@extends('admin.tampilanadmin')
@section('section') Galery @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-section') Galery @endsection

@section('content')
    <div class="container mt-4">
        <div class="row d-flex justify-content-end" style="">
            <a type="button" href="{{'/administrator/galeri/album/tambahgaleri'}}" class="btn btn-primary"
               style="background-color:#33B6FF;margin-bottom: 18px;margin-right: 18px;">Tambah</a>
        </div>
        @if(count($galeris) > 0)
            @php $i = 0; @endphp
            <div class="row" style="height: 217px;">
                @foreach($galeris as $galeri)
                    @if($i / 3 == 1)
            </div>
            <div class="row" style="height: 217px;">
                <a href="{{'/administrator/galeri/album/expandgaleri/'.$galeri->id}}">
                    <div class="col-sm-4 ">
                        <div class="card mb-1">
                            @if(count($galeri->photo) > 0)
                                @foreach($galeri->photo as $photo)
                                    <img class="card-img-top"
                                         src="/source/eventphoto/{{$galeri->id}}/{{$photo->img_name}}" alt=""
                                         style="height:206px">
                                    @break
                                @endforeach
                            @else
                                <img class="card-img-top" src="{{asset('img/image.png')}}" alt="" style="height:206px">
                            @endif
                            <div class="card-img-overlay" style="background-color: #0c030670;top: 69%;">
                                <div class="row">
                                    <div class="col-md-9">
                                        <a style="color:white">{{$galeri->name}}</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="fa fa-trash" style="font-size: 205.5%;color: red;"
                                           href="{{'/administrator/galeri/album/deletegaleri/'.$galeri->id}}"
                                           onclick="return confirm('Apakah anda Yakin ?')"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
                @else
                    <a href="{{'/administrator/galeri/album/expandgaleri/'.$galeri->id}}">
                        <div class="col-sm-4 ">
                            <div class="card mb-1">
                                @if(count($galeri->photo) > 0)
                                    @foreach($galeri->photo as $photo)
                                        <img class="card-img-top"
                                             src="/source/eventphoto/{{$galeri->id}}/{{$photo->img_name}}" alt=""
                                             style="height:206px">
                                        @break
                                    @endforeach
                                @else
                                    <img class="card-img-top" src="{{asset('img/image.png')}}" alt=""
                                         style="height:206px">
                                @endif
                                <div class="card-img-overlay" style="background-color: #0c030670;top: 69%;">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <a style="color:white">{{$galeri->name}}</a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="fa fa-trash" style="font-size: 205.5%;color: red;"
                                               href="{{'/administrator/galeri/album/deletegaleri/'.$galeri->id}}"
                                               onclick="return confirm('Apakah anda Yakin ?')"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                @endif
                @php $i++; @endphp
                @endforeach
            </div>
            <div class="col-12 d-flex justify-content-center">
                {{$galeris->links()}}
            </div>
        @else
            <p>Tidak ada album yang ditampilkan</p>
        @endif
    </div>
    </div>
    </body>
@endsection
