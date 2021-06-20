@extends('admin.tampilanadmin')

@section('section') Galery @endsection

@section('tab-section') Galery @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-tab-section') Tambah Galery @endsection

@section('content')

    <form action="{{'/administrator/galeri/album/tambahgaleri/new'}}" method="post" enctype="multipart/form-data">

        @csrf
        <tr>
            <td>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-md-5">
                            <input type="text" style="margin-bottom:20px;" class="form-control" placeholder="Nama Acara" name="nama_album" aria-label="Nama" aria-describedby="basic-addon1"></td>
            <td></td><td></td>
            <input name="tambah" type="submit" class="btn btn-primary" style="background-color:#33B6FF;width:100%" value="Tambah Album">
            </div>
            </div>
            </div>
            </td>
        </tr>

    </form>
    </body>
@endsection
