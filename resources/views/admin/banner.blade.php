@extends('admin.tampilanadmin')
@section('section')Banner @endsection

@section('tab-section')banner @endsection

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
            @foreach($isibanner as $isb)
                <tr>
                    <td> @php echo ($i); @endphp</td>
                    <td><img src="{{asset('source/banner/'.$isb->path_imagebanner)}}" style="height:70px; width:162px"
                             alt=""></td>
                    <td><a href="{{$isb->url}}" target="_blank"><p>{{$isb->url}}</p></a></td>
                    <td><a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                           href="{{'/administrator/banner/edit-banner/'.$isb->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           onclick="return confirm('Apakah anda yakin ?')"
                           href="{{'/administrator/banner/delete-banner/'.$isb->id}}"></a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
        </table>
        <a type="button" href="{{'/administrator/banner/tambah-banner'}}" class="btn btn-primary"
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
                    targets: [1,2,3]
                }],
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

@endsection
