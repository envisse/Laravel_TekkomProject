@extends('admin.tampilanadmin')
@section('section')Agenda @endsection

@section('tab-section')agenda @endsection

@section('draw-tab-section')fa fa-tags @endsection

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
                        Agenda <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Tanggal Mulai <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Tanggal Selesai <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Jam
                    </div>
                </th>
                <th class="th-sm">
                    <div class="d-flex justify-content-between">
                        Status <i class="fa fa-caret-down" aria-hidden="true" style="padding-top: 5px"></i>
                    </div>
                </th>
                <th class="th-sm" style="width: 100px">Action
                </th>
            </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
            @foreach($agendas as $agenda)
                <tr>
                    <td> @php echo ($i); @endphp</td>
                    <td>
                        <p>{{$agenda->nama_agenda}}</p>
                    </td>
                    <td>
                        {{\Carbon\Carbon::createFromFormat('Y-m-d', $agenda->tanggalmulai)->format('m-d-Y')}}
                    </td>
                    @if($agenda->tanggalselesai != null)
                        <td>
                            {{\Carbon\Carbon::createFromFormat('Y-m-d', $agenda->tanggalselesai)->format('m-d-Y')}}
                        </td>
                    @else
                        <td>
                            <p>-</p>
                        </td>
                    @endif
                    @if($agenda->end != null)
                        <td style="width: 100px">
                            <p>{{$agenda->start}} - {{$agenda->end}}</p>
                        </td>
                    @else
                        <td style="width: 100px">
                            <p>{{$agenda->start}} - Selesai</p>
                        </td>
                    @endif

                    <td>
                        <p>{{$agenda->status}}</p>
                    </td>
                    <td> <a class="fa fa-pencil-square-o" style="font-size: 33px;color: orange;padding-right: 17px"
                            href="{{'/administrator/agenda/edit/'.$agenda->id}}"></a>
                        <a class="fa fa-trash" style="font-size: 35.5px;color: red;"
                           onclick="return confirm('Apakah anda yakin ?')"
                           href="{{'/administrator/agenda/delete-agenda/'.$agenda->id}}"></a>
                    </td>
                    @php $i++; @endphp
                </tr>
            @endforeach
        </table>
    </div>
    <a type="button" href="{{'/administrator/agenda/tambah'}}" class="btn btn-primary"
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
                    targets: [3,4]
                }],
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
