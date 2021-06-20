@extends('admin.tampilanadmin')
@section('section') Video @endsection

@section('draw-tab-section')fa fa-video-camera @endsection

@section('tab-section') Video @endsection

@section('content')
    <div class="table-responsive">
        <table class="table  table-hover ">
            <thead style="background-color:#33B6FF;color:white">
            <tr>
                <th>Judul</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
            </thead>
            @foreach($videos as $video)
                <tbody>
                <tr>
                    <td>
                        {{$video->judul_video}}
                    </td>
                    <td>
                        <a href="{{$video->url_video}}" target="_blank">{{$video->url_video}}</a>
                    </td>
                    <td>
                        <a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/galeri/video/edit/'.$video->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           href="{{'/administrator/galeri/video/delete/'.$video->id}}"
                           onclick="return confirm('Apakah anda yakin ?')"></a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        <div class="col-12 d-flex justify-content-center">
            {{$videos->links()}}
        </div>
        <a type="button" href="{{'/administrator/galeri/video/tambah'}}" class="btn btn-primary"
           style="background-color:#33B6FF">Tambah</a>
    </div>
    </div>
    </body>
@endsection
