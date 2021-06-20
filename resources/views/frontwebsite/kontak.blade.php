@extends('frontwebsite.layoutfront')

@section('title') KONTAK @endsection

@section('active-kontak') active @endsection

@section('content')

<body>
<div class="jumbotron jumbotron-fluid lol" style="margin-bottom: 0px;padding: 8rem;">
    <center>
        <div class="container">
            <div class="row">
                <div class="col"><br>
                    <h2 class="colop text-light" data-aos="fade-up" data-aos-once="true" data-aos-delay="150"
                        style="font-size: 68px">KONTAK KAMI</h2>
                    <p style="color: white" data-aos="fade-up" data-aos-once="true" data-aos-delay="450"></p>
                </div>
            </div>
        </div>
    </center>
</div>

<div class="jumbotron" style="margin-bottom: 0px;padding:9rem 2rem 9rem 2rem">
    <div class="container">
        <div class="row" style="margin-top: 0px">
            <div class="col-md-5">
                <div>
                    <img src="{{asset('img/kontak.png')}}" style="width:100%" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <h2 style="padding-bottom: 20px ;text-align: center;font-weight: bold">Hubungi kami segera</h2>
                <p style="color: #6b6b6b;"> rerum, mollitia omnis aspernatur voluptatem debitis ullam reiciendis earum
                    laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reiciendis, aliquam
                    libero nulla corporis deleniti aliquid aut dignissimos earum autem. Distinctio dolores consequatur
                    quia perferendis nisi, hic voluptatem at quis!</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="d-flex justify-content-start">
                            <i class="fa fa-phone-square fa-lg" style="margin-right: 10px;margin-top: 12px"></i>
                            <div>
                                <p style="color: #6b6b6b;margin-bottom: 5px">Phone</p>
                                <p style="margin-top: 0px">0541744946</p>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-start">
                            <i class="fa fa-envelope fa-lg" style="margin-right: 10px;margin-top: 12px"></i>
                            <div>
                                <p style="color: #6b6b6b;margin-bottom: 5px">Email</p>
                                <p style="margin-top: 0px">layanan@disdik.kaltimprov.go.id</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <i class="fa fa-building fa-lg" style="margin-right: 10px;margin-top: 12px"></i>
                        <div>
                            <p style="color: #6b6b6b;margin-bottom: 5px">Office</p>
                            <p style="margin-top: 0px">UPTD TEKKOM & INFODIK</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron  bg-dark" style="margin-bottom: 0px;padding:4rem 2rem 4rem 2rem">
    <div class="container" style="max-width: 1370px;">
        <div class="row ">
            <div class="container" style="max-width: 1370px;">
                <iframe style="width: 100%"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.347160794278!2d117.14623187238166!3d-0.48804131229121855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b3676d936c3c0e!2sUPTD%20Teknologi%20Komunikasi%20Dan%20Informasi%20Pendidikan!5e0!3m2!1sen!2sid!4v1597131608308!5m2!1sen!2sid"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

@endsection
