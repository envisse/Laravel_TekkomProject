@extends('admin.tampilanadmin')
@section('section') Bahan ajar @endsection

@section('tab-section') Bahan Ajar @endsection

@section('draw-tab-section') fa fa-laptop @endsection

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
                        Url
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Kategori <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm" style="width: 100px">Action
                </th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @foreach($isibahanajar as $iba)
                <tr>
                    <td> @php echo ($i); @endphp</td>
                    <td>
                        <p>{{$iba->judul_bahan_ajar}}</p>
                    </td>
                    <td>
                        <a href="{{$iba->url_bahan_ajar}}" target="_blank"><p>{{$iba->url_bahan_ajar}}</p></a>
                    </td>
                    <td>
                        <p>{{$iba->kategori}}</p>
                    </td>
                    <td><a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/bahanajar/editba/'.$iba->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           href="{{'/administrator/bahanajar/deleteba/'.$iba->id}}"
                           onclick="return confirm('Apakah anda yakin ?')"></a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
        </table>
    </div>
    <a type="button" href="{{'/administrator/bahanajar/tambahba'}}" class="btn btn-primary"
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
                    targets: [3]
                }],
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
