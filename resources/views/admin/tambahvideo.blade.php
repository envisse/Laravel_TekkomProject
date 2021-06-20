@extends('admin.tampilanadmin')
@section('section') Video @endsection

@section('draw-tab-section')fa fa-video-camera @endsection

@section('tab-section') Video @endsection

@section('tab-tab-section') Tambah Video @endsection

@section('content')
            <form action="{{'/administrator/galeri/video/tambah/save'}}" method="post" enctype="multipart/form-data">
                @csrf
            <tr>
                <td>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-md-5">
                            <input type="text" style="margin-bottom:20px;" class="form-control" placeholder="Judul Video" aria-label="Nama" name="nama_video" aria-describedby="basic-addon1"></td>
                            <input type="text" style="margin-bottom:20px;" class="form-control" placeholder="Url Video" aria-label="Nama" name="url_video" aria-describedby="basic-addon1"></td>
                            <td></td><td></td><input name="tambah" type="submit" class="btn btn-primary" style="background-color:#33B6FF;width:100%;" value="Simpan">
                        </div>
                    </div>
                </div>
                </td>
            </tr>
            </form>
        </table>
    </body>

@endsection
