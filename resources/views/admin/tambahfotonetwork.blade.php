@extends('admin.tampilanadmin')

@section('section') Galery @endsection

@section('tab-section') Galery @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-tab-tab-section') Tambah Foto @endsection

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../../Tekkom/TEKKOM/php/admin/text-editor.css"/>
            <form action="{{'/administrator/fotonetwork/add'}}" method="post" enctype="multipart/form-data">
                @csrf
            <tr>
            <td>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="imgWrap">
                                    <img src="{{asset('img/image.png')}}" id="imgView" class="card-img-top img-fluid" >
                                </div>
                                <div class="card-body">
                                    <div class="custom-file">
                                        <input type="file" id="inputFile" class="imgFile custom-file-input" aria-describedby="inputGroupFileAddon01"
                                               name="foto">
                                        <label class="custom-file-label" for="path">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <input type="text" style="margin-bottom:20px;" class="form-control" placeholder="description"
                                   name="desc" aria-label="Nama" aria-describedby="basic-addon1">
                            <td></td><input name="tambah" type="submit" class="btn btn-primary" style="background-color:#33B6FF;" value="Simpan">
                        </div>
                    </div>
                </div>
                </td>
            </tr>
            </form>
    </body>
            <script>
                $("#inputFile").change(function(event) {
                    fadeInAdd();
                    getURL(this);
                });

                $("#inputFile").on('click',function(event){
                    fadeInAdd();
                });

                function getURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        var filename = $("#inputFile").val();
                        filename = filename.substring(filename.lastIndexOf('\\')+1);
                        reader.onload = function(e) {
                            debugger;
                            $('#imgView').attr('src', e.target.result);
                            $('#imgView').hide();
                            $('#imgView').fadeIn(500);
                            $('.custom-file-label').text(filename);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                    $(".alert").removeClass("loadAnimate").hide();
                }

                function fadeInAdd(){
                    fadeInAlert();
                }
                function fadeInAlert(text){
                    $(".alert").text(text).addClass("loadAnimate");
                }
            </script>
@endsection
