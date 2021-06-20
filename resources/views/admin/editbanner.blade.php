@extends('admin.tampilanadmin')

@section('section') Banner @endsection

@section('tab-section') banner @endsection

@section('draw-tab-section')fa fa-image @endsection

@section('tab-tab-section')Edit banner@endsection

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../../../Tekkom/TEKKOM/php/admin/text-editor.css"/>
            @foreach($isibanner as $ib)
            <form action="{{'/administrator/banner/edit-banner/save/'.$ib->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="imgWrap">
                                            <img src="{{asset('source/banner/'.$ib->path_imagebanner)}}" id="imgView"
                                                 class="card-img-top img-fluid" >
                                        </div>
                                        <div>
                                            <input type="hidden" value="{{$ib->path_imagebanner}}" name="currentfile">
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-file">
                                                <input type="file" id="inputFile" class="imgFile custom-file-input"
                                                       aria-describedby="inputGroupFileAddon01"
                                                       name="imagebanner" >
                                                <label class="custom-file-label" for="inputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="Url"
                                           name="url" aria-label="Nama" aria-describedby="basic-addon1" value="{{$ib->url}}"></td>
                    <td></td> <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
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
                @endforeach
    </body>
@endsection
