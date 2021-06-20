@extends('admin.tampilanadmin')

@section('section') Bahan Ajar @endsection

@section('tab-section') Bahan Ajar @endsection

@section('draw-tab-section')fa fa-laptop @endsection

@section('tab-tab-section') Tambah bahan ajar @endsection

@section('content')
    <form action="{{'/administrator/bahanajar/tambahba/new'}}" method="post" enctype="multipart/form-data">

        @csrf
        <tr>
            <td>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-md-5">
                            <input type="text" style="margin-bottom:20px;" class="form-control" placeholder="Judul"
                                   name="judul_bahanajar" aria-label="Nama" aria-describedby="basic-addon1">
            </td>
            <input type="text" style="margin-bottom:20px;" class="form-control" placeholder="Url" name="url_bahanajar"
                   aria-label="Nama" aria-describedby="basic-addon1"></td>
            <select class="form-control"style="margin-bottom:20px;" name="kategori" id="" >
                <option value="#" disabled selected>Kategori</option>
                <option value="SLB">SLB</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
            </select>
            <td></td>
            <td></td>
            <input name="tambah" type="submit" class="btn btn-primary" style="background-color:#33B6FF;width:100%"
                   value="Simpan">
            </div>
            </div>
            </div>
            </td>
        </tr>

    </form>
    </body>
@endsection
