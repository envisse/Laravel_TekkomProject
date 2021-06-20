@extends('admin.tampilanadmin')

@section('section') Pegawai @endsection

@section('tab-section') Pegawai @endsection

@section('draw-tab-section') fa fa-gear @endsection

@section('tab-tab-section')Edit Pegawai @endsection


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    @foreach($isiaccount as $up)
    <form action="{{'/administrator/account/editdata/save/'.$up->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="imgWrap">
                                    <img src="{{asset('source/pegawai/'.$up->foto_pegawai)}}" id="imgView" class="card-img-top img-fluid">
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="currentfile" value="{{$up->foto_pegawai}}">
                                    <div class="custom-file">
                                        <input type="file" id="inputFile" class="imgFile custom-file-input"
                                               aria-describedby="inputGroupFileAddon01" name="fotopegawai">
                                        <label class="custom-file-label" for="inputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="NIP" aria-label="Nama" name="nik" value="{{$up->nip}}" aria-describedby="basic-addon1"></td><br>
            <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" value="{{$up->nama_pegawai}}" name="nama_pegawai" aria-describedby="basic-addon1"></td><br>
            <div class="input-group">
                <select class="custom-select" id="inputGroupSelect04" name="tipe_admin" aria-label="Example select with button addon" style="width: 100%">
                    <option selected>{{$up->tipe_admin}}</option>
                    <option value="1">Master</option>
                    <option value="2">User</option>
                </select>
            </div>
            <td><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top: 40px;width: 100%"></td>
            </div>
            </div>
            </div>
            </td>
        </tr>
    </form>

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
    </body>
    @endforeach
@endsection
