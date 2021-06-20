@extends('frontwebsite.layoutfront')

@section('title') LIPUTAN @endsection

@section('active-programkerja') active @endsection

@section('content')
    <section class="top__section liputan">
        <header class="container pt-5 pb-5">
            <h1 class="col-md-8">LIPUTAN</h1>
            <p class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis commodo lacus rhoncus,
                cras posuere risus, et quis sit. Suspendisse fusce vitae sed volutpat ornare dolor imperdiet sit. Odio
                varius venenatis, nisi, sed vivamus arcu, sodales etiam mauris. Felis risus, nisi vitae non, a nunc.
                Laoreet euismod eleifend auctor arcu. Consequat risus nunc id magnis vel. Urna fermentum semper mauris
                risus senectus bibendum varius diam mauris.
                Et sed tortor montes, nulla. Dis sed nisi tristique.</p>
        </header>
    </section><!-- End Header Section-->
    <div class="gallery" style="background-color: white">
        <div class="container">
            <div class="photo col-12 pt-5" style="color: black">
                <!-- Header -->
                <div class="header row pb-3 pt-5 pl-3 pr-3">
                    <hr class="line column col-md">
                    <h1 class="col-md" style="text-align: center;">Photo Liputan</h1>
                    <hr class="line column col-md">
                </div>

                <!-- Photo Grid -->
                <div class="row">
                    <div class="column">
                        <div>
                            @foreach($photo1 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="img1 galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>

                        <div>
                            @foreach($photo2 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="img2 galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>

                        <div>
                            @foreach($photo3 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="img4 galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>
                        <div>
                            @foreach($photo4 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            @foreach($photo5 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%;height: 18rem;object-fit: cover;"></a>
                            @endforeach
                        </div>

                        <div>
                            @foreach($photo6 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>

                        <div>
                            @foreach($photo7 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            @foreach($photo8 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_jaringan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>
                        <div>
                            @foreach($photo9 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%;height: 34rem;object-fit: cover;"></a>
                            @endforeach
                        </div>
                        <div>
                            @foreach($photo10 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>
                    </div>
                    <div class="column">
                        <div>
                            @foreach($photo11 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>

                        <div>
                            @foreach($photo12 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}" data-title="{{$photo->desc_foto}}"
                                   data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%;height: 18rem;object-fit: cover;"></a>
                            @endforeach
                        </div>

                        <div>
                            @foreach($photo13 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}"
                                   data-title="{{$photo->desc_foto}}" data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>

                        <div>
                            @foreach($photo14 as $photo)
                                <a href="/source/ops_liputan/{{$photo->path_foto}}"
                                   data-title="{{$photo->desc_foto}}" data-lightbox="galleryberanda"><img
                                        src="/source/ops_liputan/{{$photo->path_foto}}"
                                        class="galleryanim" style="width:100%"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <p class="pt-5" style="text-align: center !important;"><a href="#">LIHAT SELENGKAPNYA</a></p>
            </div>

            <div class="video col-12 pt-3 pb-5">
            </div>
        </div>
    </div>
@endsection
