@extends('admin.tampilanadmin')

@section('section') Instalasi jaringan @endsection

@section('tab-section') Instalasi jaringan @endsection

@section('draw-tab-section')fa fa-tags @endsection

@section('tab-tab-section') Tambah Instalasi jaringan @endsection

@section('content')


    <form action="{{'/administrator/network/add/new'}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="margin-top: 20px"></div>
        <tr>
            <div class="container mt-3">
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Nama Sekolah</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="nama sekolah" name="sekolah"
                               aria-label="Nama"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Kota</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Kota" name="kota" aria-label="Nama"
                               aria-describedby="basic-addon1" required>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"
                               style="background-color:#33B6FF;margin-top: 6%;width: 100%;">
                    </div>

                </div>
            </div>

        </tr>
    </form>
    </body>

@endsection
