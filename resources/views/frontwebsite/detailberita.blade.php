@extends('frontwebsite.layoutfront')

@section('active-berita') active @endsection

@section('title') {{$judul}} @endsection

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
            nonce="LUHMhvY3"></script>
    <div class="isi container mt-5 mb-5">
        <div class="row mb-3">
            @foreach($beritas as $berita)
                <div class="col-sm">
                    <h3>{{$berita->judul_berita}}</h3>
                    <div class="d-flex justify-content-start">
                        <i class="fa fa-calendar-o fa-2"
                           style="margin-top: 2px;font-weight: normal;padding-right: 5px;color: #4993ff"></i>
                        <p class="text-muted">{{\Carbon\Carbon::parse($berita->tanggalpublish)->translatedFormat('l, d F Y')}}</p>
                    </div>
                </div>

        </div>
        <div class="row">
            <div class="col-sm-8">
                <img class="mb-4" src="{{asset('source/berita/'.$berita->path_thumbnail)}}" style="width:100%">
                {!! $berita->isi_berita !!}
                @endforeach
                <div class="row">
                    @foreach($ops_beritas as $ops_berita)
                        <a href="/source/ops_berita/{{$ops_berita->berita_id}}/{{$ops_berita->path}}"
                           data-title="{{$ops_berita->path}}"
                           data-lightbox="galleryberanda"><img
                                src="/source/ops_berita/{{$ops_berita->berita_id}}/{{$ops_berita->path}}"
                                class="galleryanim" width="350" height="350" style="padding-top: 20px;padding-right: 10px"></a>
                    @endforeach
                </div>
            </div>


            <div class="col-sm-4">
                @foreach($tautans as $tautan)
                    <div class="pt-1">
                        <a href="{{$tautan->url_tautan}}" target="_blank"><img class="mb-3"
                                                                               src="{{asset('source/tautan/'.$tautan->image_tautan)}}"
                                                                               style="width:100%; height: 75px;"></a>
                    </div>
                @endforeach
                <div class="pt-3">
                    <div class="fb-page"
                         data-href="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983"
                         data-tabs="timeline" data-width="400" data-height="600" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote
                            cite="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Dinas-Pendidikan-dan-Kebudayaan-Kaltim-2382205705331983">Dinas
                                Pendidikan dan Kebudayaan Kaltim</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="terbaru container pb-5">
        <h2 style="text-align: center;">Berita Terbaru</h2>
        <div class="row mt-5  mb-3">
            @foreach($another as $berita_terbaru)
                <div class="column">
                    <a href="{{'/berita/'.$berita_terbaru->id.'/'.$berita_terbaru->judul_berita}}">
                        <img src="{{asset('source/berita/'.$berita_terbaru->path_thumbnail)}}"
                             style="width:100%;height: 160px;object-fit: cover;">
                        <h5 style="padding-top: 20px" class="mt-0">{{$berita_terbaru->judul_berita}}</h5>
                        <div class="d-flex justify-content-start">
                            <i class="fa fa-calendar-o fa-2"
                               style="margin-top: 2px;font-weight: normal;padding-right: 5px;color: #4993ff"></i>
                            <p><small class="text-muted">{{$berita_terbaru->tanggalpublish}}</small></p>
                        </div>
                        <div class="text-muted" style="font-size: 14px">{!!$berita_terbaru->isi_thumbnail  !!}...</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
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
