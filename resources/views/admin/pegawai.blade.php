@extends('admin.tampilanadmin')

@section('section') Pegawai @endsection

@section('tab-section') Pegawai @endsection

@section('draw-tab-section') fa fa-gear @endsection

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
                        NIP <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Foto
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Nama <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Password
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Type <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm" style="width: 100px">Action
                </th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @foreach($isiaccount as $acclib)
                <tr>
                    <td style="padding-top: 10px"> @php echo ($i); @endphp</td>
                    <td>
                        <pstyle
                        ="padding-top: 10px">{{$acclib->nip}}</p>
                    </td>
                    <td>
                        <img src="{{asset('source/pegawai/'.$acclib->foto_pegawai)}}" height="100px" width="100px"
                             alt="">
                    </td>
                    <td>
                        <p style="padding-top: 10px">{{$acclib->nama_pegawai}}</p>
                    </td>
                    <td>
                        <p style="padding-top: 10px">{{$acclib->password}}</p>
                    </td>
                    <td>
                        <p style="padding-top: 10px">{{$acclib->tipe_admin}}</p>
                    </td>
                    <td><a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/account/editdata/'.$acclib->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           href="{{'/administrator/account/delete-account/'.$acclib->id}}"
                           onclick="return confirm('apakah anda yakin ?')"></a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
        </table>
    </div>
    <a type="button" name="simpan" href="{{'/administrator/account/tambah-account'}}" class="btn btn-primary"
       style="background-color:#33B6FF">Tambah</a>

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
                    targets: [2,4,6]
                }],
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
