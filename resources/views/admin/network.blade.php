@extends('admin.tampilanadmin')
@section('section') Instalasi jaringan @endsection

@section('draw-tab-section')fa fa-newspaper-o @endsection

@section('tab-section')Instalasi jaringan @endsection

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
                        Nama Sekolah <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Kota <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm" style="width: 100px">Action
                </th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @foreach($networks as $network)
                <tr>
                    <td> @php echo ($i); @endphp</td>
                    <td>{{$network->nama_sekolah}}</td>
                    <td>{{$network->kota_sekolah}}</td>
                    <td><a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/network/edit/'.$network->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           onclick="return confirm('Apakah anda yakin ?')"
                           href="{{'/administrator/network/delete/'.$network->id}}"></a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    </div>
    <a type="button" href="{{'/administrator/network/add'}}" class="btn btn-primary"
       style="background-color:#33B6FF;margin-left: 10px">Tambah</a>
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
