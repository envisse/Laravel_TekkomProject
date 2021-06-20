@extends('admin.tampilanadmin')

@section('section') Link E-book @endsection

@section('tab-section') Link E-book @endsection

@section('draw-tab-section') fa fa-download @endsection

@section('tab-tab-section') Edit Link E-book @endsection

@section('content')
    @foreach($ebooks as  $ebook)
        <form action="{{'/administrator/book/edit/save/'.$ebook->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>
                    <div class="container mt-3">
                        <div class="row" style="margin-bottom:20px">
                            <div class="col-md-3"></div>
                            <label class="col-sm-1 col-form-label">Nama</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" value="{{$ebook->nama_ebook}}" placeholder="Nama" name="nama" aria-label="Nama"
                                       aria-describedby="basic-addon1">
                </td>
                </div>
                <div class="col-md-3"></div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-3"></div>
                    <label class="col-sm-1 col-form-label">URL</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="url" value="{{$ebook->url_ebook}}" placeholder="Url" aria-label="Nama"
                               aria-describedby="basic-addon1"></td>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-3"></div>
                    <label class="col-sm-1 col-form-label">Kategori</label>
                    <div class="col-md-4">
                        <select class="form-control" style="margin-bottom:20px;" name="kategori" id="">
                            <option selected>{{$ebook->kategori}}</option>
                            <option value="SLBN">SLBN</option>
                            <option value="SMK">SMK</option>
                            <option value="SMA">SMA</option>
                        </select>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"
                               style="background-color:#33B6FF;margin-top: 6%;width: 100%;">
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <td></td>
                </div>
                </td>
            </tr>
        </form>
        @endforeach
        </body>
@endsection
