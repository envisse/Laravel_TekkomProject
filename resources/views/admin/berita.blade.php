@extends('admin.tampilanadmin')

@if($tab == 'hasilkerja')
@section('section') Hasil Kerja @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-section') Hasil Kerja @endsection

@section('content')
    <div>
        <table id="dtOrderExample" class="table table-responsive table-striped table-bordered " cellspacing="0"
               width="100%">
            <thead style="background-color:#33B6FF;color:white">
            <tr>
                <th class="th-sm" style="width: 30px">
                    <div class="d-flex justify-content-between">
                        No<i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Judul <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Tanggal <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm" style="width: 100px">Action
                </th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @foreach($hasils as $hasil)
                <tr>
                    <td> @php echo ($i); @endphp</td>
                    <td>
                        <div class="bata2s">{{$hasil->judul}}</div>
                    </td>
                    <td>
                        <p>{{\Carbon\Carbon::createFromFormat('Y-m-d', $hasil->tanggalpublish)->format('m-d-Y')}}</p>
                    </td>
                    <td><a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/listhasilkerja/edit-record/'.$hasil->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           href="{{'/administrator/listhasilkerja/delete-record/'.$hasil->id}}"
                           onclick="return confirm('apakah anda yakin?')"></a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a type="button" href="{{'/administrator/listhasilkerja/tambah-record'}}" class="btn btn-primary"
       style="background-color:#33B6FF">Tambah</a>
    </div>
    </div>


    </body>
    <script type="text/javascript" src="{{asset('mdboostrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/addons/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dtOrderExample').DataTable({
                "searching": false,
                "aaSorting": [],
                columnDefs: [{
                    orderable: false,
                    targets: [4]
                }],
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection

@else
@section('section') Berita @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-section') berita @endsection

@section('content')
    <div>
        <table id="dtOrderExample" class="table table-responsive table-striped table-bordered " cellspacing="0"
               width="100%">
            <thead style="background-color:#33B6FF;color:white">
            <tr>
                <th class="th-sm" style="width: 30px">
                    <div class="d-flex justify-content-between">
                        No<i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Gambar
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Judul <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Tanggal <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm" style="width: 100px">Action
                </th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @foreach($isiberita as $ib)
                <tr>
                    <td> @php echo ($i); @endphp</td>
                    <td>
                        <img src="{{asset('source/berita/'.$ib->path_thumbnail)}}" height="80px" width="94px" alt="">
                    </td>
                    <td>
                        <div class="bata2s">{{$ib->judul_berita}}</div>
                    </td>
                    <td>
                        <p>{{\Carbon\Carbon::createFromFormat('Y-m-d', $ib->tanggalpublish)->format('m-d-Y')}}</p>
                    </td>
                    <td><a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/listberita/edit-berita/'.$ib->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           href="{{'/administrator/listberita/delete-berita/'.$ib->id}}"
                           onclick="return confirm('apakah anda yakin?')"</a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    </div>
    <a type="button" href="{{'/administrator/listberita/tambah-berita'}}" class="btn btn-primary"
       style="background-color:#33B6FF">Tambah</a>
    </div>
    </body>
    <script type="text/javascript" src="{{asset('mdboostrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdboostrap/js/addons/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dtOrderExample').DataTable({
                "searching": false,
                "aaSorting": [],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 4]
                }],
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
@endif
