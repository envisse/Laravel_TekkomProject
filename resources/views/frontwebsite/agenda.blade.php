@extends('frontwebsite.layoutfront')

@section('title') AGENDA @endsection

@section('active-programkerja') active @endsection

@section('content')
    <body>

    <div class="modul container pt-5 pb-5 mb-5">
        <h2>Agenda</h2>
        <div class="card text-center">
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama File</th>
                        <th scope="col" style="padding-left: 165px">Tanggal</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($agendas as $agenda)
                        <tr>
                            <th scope="row">@php echo ($i); @endphp</th>
                            <td width="500px">{{$agenda->nama_agenda}}</td>
                            <td style="padding-left: 50px" class="d-flex justify-content-around">
                                {{\Carbon\Carbon::parse($agenda->tanggalmulai)->translatedFormat('d-m-Y')}}
                                <p style="font-weight: bold">s/d </p>
                                {{\Carbon\Carbon::parse($agenda->tanggalselesai)->translatedFormat('d-m-Y')}}</td>
                            <td style="text-align: end"><a class="btn btn-info btn-sm"
                                                           href="{{'agenda/'.$agenda->id}}"
                                                           role="button">SHOW MORE</a></td>
                        </tr>
                        @php $i = $i + 1; @endphp
                    @endforeach
                    </tbody>
                </table>
                <div class="my-4">
                    {{$agendas->links()}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>


    </body>
    </html>
@endsection
