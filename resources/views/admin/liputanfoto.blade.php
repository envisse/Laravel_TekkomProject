@extends('admin.tampilanadmin')
@section('section') Galery @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-section') Foto network @endsection
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div class="d-flex justify-content-start">
                @if(count($fotos)<14)
                    <a type="button" href="{{'/administrator/fotoliputan/showadd'}}"
                       class="btn btn-primary" style="background-color:#33B6FF;margin-bottom: 18px;margin-right: 18px;">Upload
                        Foto</a>
                @else
                    <a type="button" href="#" onclick="return confirm('Maximal 14 foto')"
                       class="btn btn-primary" style="background-color:#33B6FF;margin-bottom: 18px;margin-right: 18px;">Upload
                        Foto</a>
                @endif

            </div>
        </div>
        @if(count($fotos) > 0)
            <div class="row">
                @foreach($fotos as $foto)
                    <div class="col-sm-4 ">
                        <div class="card mb-1">
                            <img class="card-img-top" src="/source/ops_liputan/{{$foto->path_foto}}" alt=""
                                 style="height:200px">
                            <div class="card-img-overlay" style="background-color: #0c030670;top: 69%;">
                                <div class="row">
                                    <div class="col-md-9">
                                        <a style="color:white">{{$foto->path_foto}}</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a class="fa fa-trash" style="font-size: 205.5%;color: red;"
                                           href="{{'/administrator/fotoliputan/delete/'.$foto->id}}"
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
