@extends('frontwebsite.layoutfront')

@section('title') Modul Ajar @endsection

@section('active-bahanajar') active @endsection

@section('content')
    <div class="modul container pt-5 pb-5 mb-5">
        <h2>DAFTAR MODUL BAHAN AJAR {{$tingkat}}</h2>
        <br>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    @if($tingkat == 'SLBN')
                        <li class="nav-item">
                            <a class="nav-link active" href="#">SLBN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/modulajar/SMA'}}">SMA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/modulajar/SMK'}}">SMK</a>
                        </li>
                    @elseif($tingkat == 'SMA')
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/modulajar/SLBN'}}">SLBN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">SMA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/modulajar/SMK'}}">SMK</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/modulajar/SLBN'}}">SLBN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/modulajar/SMA'}}">SMA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">SMK</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="card-body">
                <table id="dtOrderExample" class="table  table-striped table-bordered " cellspacing="0"
                       width="100%">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th-sm" style="width: 40px">
                            <div class="d-flex justify-content-between">
                                No<i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px;padding-left: 5px"></i>
                            </div>
                        </th>
                        <th class="th-sm">
                            <div class="d-flex justify-content-between">
                                Nama File <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                            </div>
                        </th>
                        <th class="th-sm">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1; @endphp
                    @foreach($ebooks as $ebook)
                        <tr>
                            <th scope="row">@php echo ($i); @endphp</th>
                            <td>{{$ebook->nama_ebook}}</td>
                            <td style="text-align: end"><a class="btn btn-primary btn-sm"
                                                           href="{{$ebook->url_ebook}}" target="_blank"
                                                           role="button">DOWNLOAD</a></td>
                        </tr>
                            @php $i++; @endphp
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="my-4">
                {{$ebooks->links()}}
            </div>
        </div>
    </div>
@endsection
