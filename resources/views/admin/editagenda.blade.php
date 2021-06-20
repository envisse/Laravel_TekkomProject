@extends('admin.tampilanadmin')

@section('section') Agenda @endsection

@section('tab-section') agenda @endsection

@section('draw-tab-section')fa fa-tags @endsection

@section('tab-tab-section') Edit agenda @endsection

@section('content')
    @foreach($agendas as $agenda)
        <script type="text/javascript" src="{{asset('css_boostrap/text-editor.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="{{asset('css_boostrap/text-editor.css')}}"/>
        <form action="{{'/administrator/agenda/edit/save/'.$agenda->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>
                    <div class="container mt-3">
                        <div class="row" style="margin-bottom:20px">
                            <div class="col-md-2"></div>
                            <label class="col-sm-1 col-form-label">Agenda</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Agenda" name="agenda"
                                       aria-label="Nama" value="{{$agenda->nama_agenda}}"
                                       aria-describedby="basic-addon1">
                </td>
                </div>
                <div class="col-md-3"></div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Tgl Mulai</label>
                    <div class="col-md-5">
                        <input type="date" name="tanggalmulai" value="{{$agenda->tanggalmulai}}" class="form-control" placeholder="" aria-label="Nama"
                               aria-describedby="basic-addon1"></td>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Tgl Selesai</label>
                    <div class="col-md-5">
                        <input type="date" name="tanggalselesai" value="{{$agenda->tanggalselesai}}" class="form-control" placeholder="Agenda"
                               aria-label="Nama"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Jam</label>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center">
                            <input type="time" value="{{$agenda->start}}" name="start" class="form-control" required>
                            <label style="margin-left: 5%;margin-right: 5%">s/d</label>
                            <input type="time" value="{{$agenda->end}}" name="end" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row" style="margin-bottom:20px">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Alamat</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" aria-label="Nama"
                               aria-describedby="basic-addon1" value="{{$agenda->alamat}}" required>

                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Desc</label>
                    <div class="col-md-8">
                        <textarea name="desc_agenda"  id="desc_agenda" class="isiberita">{{$agenda->desc_agenda}}</textarea>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px;margin-top: 20px">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Status</label>
                    <div class="col-md-5">
                        <select class="form-control" style="margin-bottom:20px;" name="status" id="">
                            <option value="{{$agenda->status}}" disabled selected>{{$agenda->status}}</option>
                            <option value="on going">on going</option>
                            <option value="as ended">as ended</option>
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
        <script src="{{ asset('ckeditor/build/ckeditor.js')}}"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('.isiberita'), {

                    toolbar: {
                        items: [
                            'heading',
                            '|',
                            'fontFamily',
                            'fontSize',
                            'underline',
                            'bold',
                            'italic',
                            'link',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'indent',
                            'outdent',
                            '|',
                            'imageUpload',
                            'blockQuote',
                            'insertTable',
                            'mediaEmbed',
                            'undo',
                            'redo'
                        ]
                    },
                    language: 'en',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:full',
                            'imageStyle:side'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells'
                        ]
                    },
                    licenseKey: '',

                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error('Oops, something went wrong!');
                    console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
                    console.warn('Build id: qnea465eh7f4-8yf9504k0ins');
                    console.error(error);
                });

            $("#inputFile").change(function (event) {
                fadeInAdd();
                getURL(this);
            });

            $("#inputFile").on('click', function (event) {
                fadeInAdd();
            });

            function getURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    var filename = $("#inputFile").val();
                    filename = filename.substring(filename.lastIndexOf('\\') + 1);
                    reader.onload = function (e) {
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

            function fadeInAdd() {
                fadeInAlert();
            }

            function fadeInAlert(text) {
                $(".alert").text(text).addClass("loadAnimate");
            }
        </script>
@endsection
