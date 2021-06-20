@extends('admin.tampilanadmin')
@section('section')Tautan @endsection

@section('tab-section')tautan @endsection

@section('draw-tab-section')fa fa-image @endsection

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
                        Url
                    </div>
                </th>
                <th class="th-sm" style="width: 100px">Action
                </th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @foreach($tautans as $tautan)
                <tr>
                    <td> @php echo ($i); @endphp</td>
                    <td>
                        <img src="{{asset('source/tautan/'.$tautan->image_tautan)}}" alt=""
                             style="height:65px; width:220px">
                    </td>
                    <td>
                        <a href="{{$tautan->url_tautan}}" target="_blank"><p>{{$tautan->url_tautan}}</p></a>
                    </td>
                    <td><a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/tautan/edit/'.$tautan->id}}"></a>
                        <a class="fa fa-trash" onclick="return confirm('Apakah anda yakin ?')"
                           style="font-size: 35.5px;color: red;"
                           href="{{'/administrator/tautan/delete-tautan/'.$tautan->id}}"></a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
        </table>
    </div>

    </div>
    <a type="button" href="{{'/administrator/tautan/tambah'}}" class="btn btn-primary" style="background-color:#33B6FF">Tambah</a>

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
