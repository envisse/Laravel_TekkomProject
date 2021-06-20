<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css_boostrap/bootstrap3/admin.css') }}">
    <link rel="stylesheet" href="{{asset('css_boostrap/bootstrap3/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css_boostrap/bootstrap3/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <img style="padding-left:4px" src="{{asset('img/putih.png')}}" height="50px" width="220px" alt="">
        </div>
        <ul class="nav navbar-right top-nav">
            <a class="navbar-brand" href="{{'/beranda'}}">GO TO WEBSITE</a>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav" style="padding-top:2%">
                <div class="mx-auto my-auto">
                    <center>
                        <img src="{{asset('source/pegawai/'.$user->foto_pegawai)}}"
                             style="height:140px;width:140px;border-radius:50%;background-size:cover" alt="">
                        <br><br>
                        <li>
                            <a href="" class="text-muted">{{$user->nama_pegawai}}</a><br>
                            <a href="" class="text-muted">{{$user->tipe_admin}}</a>
                        </li>
                        <br>
                        <center>
                </div>
                <li>
                    <a href="{{'/administrator/dashboard'}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{'/administrator/banner'}}"><i class="fa fa-fw fa-image"></i> Banner</a>
                </li>
                <li>
                    <a href="{{'/administrator/listberita'}}"><i class="fa fa-fw fa-newspaper-o"></i> Berita</a>
                </li>
                <li>
                    <a href="{{'/administrator/listhasilkerja'}}"><i class="fa fa-fw fa-newspaper-o"></i> Hasil
                        Kerja</a>
                </li>
                <li>
                    <a href="{{'/administrator/galeri'}}"><i class="fa fa-image fa-fw "></i> Galery</a>
                </li>
                <li>
                    <a href="{{'/administrator/tautan'}}"><i class="fa fa-image fa-fw "></i> Tautan</a>
                </li>
                <li>
                    <a href="{{'/administrator/agenda'}}"><i class="fa fa-tags fa-fw "></i> Agenda</a>
                </li>
                <li>
                    <a href="{{'/administrator/bahanajar'}}"><i class="fa fa-laptop fa-fw "></i> Bahan Ajar</a>
                </li>
                <li>
                    <a href="{{'/administrator/e-book'}}"><i class="fa fa-download fa-fw "></i> Link E-book</a>
                </li>
                <li>
                    <a class="trigger mx-auto my-auto"
                            style="padding-top: 15px;padding-bottom: 15px;width: 125%">
                        <i class="fa fa-wifi fa-fw "></i> Instalasi jaringan <i class="fa fa-angle-down fa-fw pl-3" style="padding-right: 20px"></i>
                    </a>
                    <div class="content mx-auto my-auto" style="padding-top: 0">
                        <div class="d-flex justify-content-start trigger ">
                            <a href="{{'/administrator/network'}}" style="color: #9d9d9d;padding-left: 50px;width: 125%;padding-top: 15px;padding-bottom: 15px;"> list Sekolah
                            </a>
                        </div>
                        <div class="d-flex justify-content-start trigger ">
                            <a href="{{'/administrator/fotonetwork'}}" style="color: #9d9d9d;padding-left: 50px;width: 125%;padding-top: 15px;padding-bottom: 15px;"> Foto
                            </a>
                        </div>
                    </div>

                </li>
                <li>
                    <a class="trigger mx-auto my-auto"
                       style="padding-top: 15px;padding-bottom: 15px;width: 125%">
                        <i class="fa fa-wifi fa-fw "></i> Liputan <i class="fa fa-angle-down fa-fw pl-3" style="padding-right: 20px"></i>
                    </a>
                    <div class="content mx-auto my-auto" style="padding-top: 0">
                        <div class="d-flex justify-content-start trigger ">
                            <a href="{{'/administrator/fotoliputan'}}" style="color: #9d9d9d;padding-left: 50px;width: 125%;padding-top: 15px;padding-bottom: 15px;"> Foto
                            </a>
                        </div>
                    </div>
                </li>
                @can('control akun')
                    <li>
                        <a href="{{'/administrator/account'}}"><i class="fa fa-gear fa-fw "></i> Pengaturan Akun</a>
                    </li>
                @endcan
                <li>
                    <a href="{{'/administrator/logout'}}"><i class="fa fa-sign-out fa-fw "></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <form action="" method="post">
        <div class="" id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            @yield('section')
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="@yield('draw-tab-section')"></i> @yield('tab-section')
                            </li>
                            <li class="active">
                                <i class="fa"></i> @yield('tab-tab-section')
                            </li>
                            <li class="active">
                                <i class="fa"></i> @yield('tab-tab-tab-section')
                            </li>
                        </ol>
                    </div>
                </div>

    </form>
    <script>
        var coll = document.getElementsByClassName("trigger");
        var i;
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
@yield('content')
</html>
