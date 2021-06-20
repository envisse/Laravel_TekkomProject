@extends('admin.tampilanadmin')
@if($tab == 'hasilkerja')
@section('section') Hasil Kerja @endsection

@section('tab-section') hasil kerja @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-tab-section') Edit  @endsection

@section('content')
    <script type="text/javascript" src="{{asset('css_boostrap/text-editor.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('css_boostrap/text-editor.css')}}"/>
    @foreach($edit as $record)
        <form action="{{'/administrator/listhasilkerja/edit-record/save/'.$record->id}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="imgWrap">
                            <img src="{{asset('source/hasilkerja/'.$record->path)}}" id="imgView"
                                 class="card-img-top img-fluid">
                        </div>
                        <div>
                            <input type="hidden" value="{{$record->path}}" name="currentimage">
                        </div>
                        <div class="card-body">
                            <div class="custom-file">
                                <input type="file" id="inputFile" class="imgFile custom-file-input"
                                       aria-describedby="inputGroupFileAddon01"
                                       name="image">
                                <label class="custom-file-label" for="inputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Judul" aria-label="Nama"
                           name="judul" value="{{$record->judul}}" aria-describedby="basic-addon1"></td>

                    <textarea name="desc" id="isiberita" class="isiberita">{{$record->desc}}</textarea>
                    @endforeach

                    <div class="row">

                        @foreach($tab2 as $image)
                            <div class="">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <div class="col-md-2">
                                        <img
                                            src="{{asset('source/ops_hasilkerja/'.$image->hasilkerja_id.'/'.$image->path)}}"
                                            class="dam" alt="" id="imgvio"
                                            style="width: 100%">
                                    </div>
                                    <div class="col-md-8">

                                        <input type="hidden" name="oldfilename[]" value="{{$image->path}}">
                                        <input type="file" value="{{$image->path}}" name="filename[]" id="inputfio"
                                               class="form-control dam2"
                                               style="margin-top: 25px">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button" style="margin-top: 25px"><i
                                                    class="fa fa-minus"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="input-group control-group increment" style="margin-top: 10px">
                            <div class="input-group-btn" style="padding-top: 20px">
                                <button class="btn btn-success" type="button"><i class="fa fa-plus"></i>Add image
                                </button>
                            </div>
                        </div>
                        <div class="clone hide">
                            <div class="control-group input-group" style="margin-top:10px">
                                <div class="col-md-2">
                                    <img src="{{asset('img/image.png')}}" class="inc" alt="" id="img"
                                         style="width: 100%">
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="filename[]" id="inputfile"
                                           class="form-control incinput"
                                           style="margin-top: 25px">
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button" style="margin-top: 25px"><i
                                                class="fa fa-minus"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tr>
                            <td><input type="submit" name="simpan" class="btn btn-primary" value="Simpan"
                                       style="margin-top: 10px;"></td>
                        </tr>
        </form>

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
                            'ckfinder',
                            'undo',
                            'redo'
                        ]
                    },
                    ckfinder: {
                        // Upload the images to the server using the CKFinder QuickUpload command.
                        uploadUrl: 'http://localhost:8000/public/ckfinder/core/connector/php/connector.php?command=SaveImage&type=Files&currentFolder=/&fileName=Test.jpg',

                        // Define the CKFinder configuration (if necessary).
                        options: {
                            resourceType: 'Images'
                        }
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


            var x = 0;
            $('.dam2').each(function () {
                var imgindex = 'imgvio' + x;
                var inputfile = 'inputfio' + x;
                document.getElementById('imgvio').id = imgindex;
                document.getElementById('inputfio').id = inputfile;

                $('#' + inputfile).change(function (event) {
                    fadeInAdd();
                    getURL(this);
                });

                $('#' + inputfile).on('click', function (event) {
                    fadeInAdd();
                });

                function getURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        var filename = $('#' + inputfile).val();
                        filename = filename.substring(filename.lastIndexOf('\\') + 1);
                        reader.onload = function (e) {
                            debugger;
                            $('#' + imgindex).attr('src', e.target.result);
                            $('#' + imgindex).hide();
                            $('#' + imgindex).fadeIn(500);
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

                x++;
            });

            var i = 0;
            $(document).ready(function () {
                $(".btn-success").click(function () {
                    var html = $(".clone").html();
                    $(".increment").before(html);

                    i++;
                    var imgindex = 'img' + i;
                    var inputfile = 'inputfile' + i;
                    document.getElementById('img').id = imgindex;
                    document.getElementById('inputfile').id = inputfile;

                    $('#' + inputfile).change(function (event) {
                        fadeInAdd();
                        getURL(this);
                    });

                    $('#' + inputfile).on('click', function (event) {
                        fadeInAdd();
                    });

                    function getURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            var filename = $('#' + inputfile).val();
                            filename = filename.substring(filename.lastIndexOf('\\') + 1);
                            reader.onload = function (e) {
                                debugger;
                                $('#' + imgindex).attr('src', e.target.result);
                                $('#' + imgindex).hide();
                                $('#' + imgindex).fadeIn(500);
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

                });
                $("body").on("click", ".btn-danger", function () {
                    $(this).parents(".control-group").remove();
                });
            });
        </script>
@endsection
@else
@section('section') Berita @endsection

@section('tab-section') berita @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-tab-section') Edit berita @endsection

@section('content')
    <script type="text/javascript" src="{{asset('css_boostrap/text-editor.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('css_boostrap/text-editor.css')}}"/>
    @foreach($showberita as $eb)
        <form action="{{'/administrator/listberita/edit-berita/save/'.$eb->id}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="imgWrap">
                            <img src="{{asset('source/berita/'.$eb->path_thumbnail)}}" id="imgView"
                                 class="card-img-top img-fluid">
                        </div>
                        <div>
                            <input type="hidden" value="{{$eb->path_thumbnail}}" name="currentfile">
                        </div>
                        <div class="card-body">
                            <div class="custom-file">
                                <input type="file" id="inputFile" class="imgFile custom-file-input"
                                       aria-describedby="inputGroupFileAddon01"
                                       name="thumbnailberita">
                                <label class="custom-file-label" for="inputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Judul" aria-label="Nama"
                           name="judulberita" value="{{$eb->judul_berita}}" aria-describedby="basic-addon1"></td>

                    <textarea name="isiberita" id="isiberita" class="isiberita">{{$eb->isi_berita}}</textarea>
                    @endforeach
                    <div class="row">

                        @foreach($tab2 as $image)
                            <div class="">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <div class="col-md-2">
                                        <img
                                            src="{{asset('source/ops_berita/'.$image->berita_id.'/'.$image->path)}}"
                                            class="dam" alt="" id="imgvio"
                                            style="width: 100%">
                                    </div>
                                    <div class="col-md-8">

                                        <input type="hidden" name="oldfilename[]" value="{{$image->path}}">
                                        <input type="file" value="{{$image->path}}" name="filename[]" id="inputfio"
                                               class="form-control dam2"
                                               style="margin-top: 25px">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button" style="margin-top: 25px"><i
                                                    class="fa fa-minus"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="input-group control-group increment" style="margin-top: 10px">
                            <div class="input-group-btn" style="padding-top: 20px">
                                <button class="btn btn-success" type="button"><i class="fa fa-plus"></i>Add image
                                </button>
                            </div>
                        </div>
                        <div class="clone hide">
                            <div class="control-group input-group" style="margin-top:10px">
                                <div class="col-md-2">
                                    <img src="{{asset('img/image.png')}}" class="inc" alt="" id="img"
                                         style="width: 100%">
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="filename[]" id="inputfile"
                                           class="form-control incinput"
                                           style="margin-top: 25px">
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button" style="margin-top: 25px"><i
                                                class="fa fa-minus"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tr>
                            <td><input type="submit" name="simpan" class="btn btn-primary" value="Simpan"
                                       style="margin-top: 10px;"></td>
                        </tr>
                    </div>
                </div>
            </div>
            </div>
        </form>

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
                            'ckfinder',
                            'undo',
                            'redo'
                        ]
                    },
                    ckfinder: {
                        // Upload the images to the server using the CKFinder QuickUpload command.
                        uploadUrl: 'http://localhost:8000/public/ckfinder/core/connector/php/connector.php?command=SaveImage&type=Files&currentFolder=/&fileName=Test.jpg',

                        // Define the CKFinder configuration (if necessary).
                        options: {
                            resourceType: 'Images'
                        }
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


            var x = 0;
            $('.dam2').each(function () {
                var imgindex = 'imgvio' + x;
                var inputfile = 'inputfio' + x;
                document.getElementById('imgvio').id = imgindex;
                document.getElementById('inputfio').id = inputfile;

                $('#' + inputfile).change(function (event) {
                    fadeInAdd();
                    getURL(this);
                });

                $('#' + inputfile).on('click', function (event) {
                    fadeInAdd();
                });

                function getURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        var filename = $('#' + inputfile).val();
                        filename = filename.substring(filename.lastIndexOf('\\') + 1);
                        reader.onload = function (e) {
                            debugger;
                            $('#' + imgindex).attr('src', e.target.result);
                            $('#' + imgindex).hide();
                            $('#' + imgindex).fadeIn(500);
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

                x++;
            });

            var i = 0;
            $(document).ready(function () {
                $(".btn-success").click(function () {
                    var html = $(".clone").html();
                    $(".increment").before(html);

                    i++;
                    var imgindex = 'img' + i;
                    var inputfile = 'inputfile' + i;
                    document.getElementById('img').id = imgindex;
                    document.getElementById('inputfile').id = inputfile;

                    $('#' + inputfile).change(function (event) {
                        fadeInAdd();
                        getURL(this);
                    });

                    $('#' + inputfile).on('click', function (event) {
                        fadeInAdd();
                    });

                    function getURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            var filename = $('#' + inputfile).val();
                            filename = filename.substring(filename.lastIndexOf('\\') + 1);
                            reader.onload = function (e) {
                                debugger;
                                $('#' + imgindex).attr('src', e.target.result);
                                $('#' + imgindex).hide();
                                $('#' + imgindex).fadeIn(500);
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

                });
                $("body").on("click", ".btn-danger", function () {
                    $(this).parents(".control-group").remove();
                });
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
@endif
