@extends('admin.tampilanadmin')
@section('content')
    <form  action="login.php" method="post">
        <div class="" id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pengaturan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>   <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-gear"></i> Pengaturan
                            </li>
                        </ol>
                    </div>
                </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <TR>
                <th>NIK</th>
                <th>Nama</th>
                <th>No Telpon</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>

            @foreach( $data  as $d)
                <tr>
                    <td>
                    {{ $d->nik }}
                    </td>
                    <td>
                        {{ $d->nama_pegawai }}
                    </td>
                    <td>
                        {{ $d->no_hp }}
                    </td>
                    <td>
                        {{ $d->jenis_kelamin }}
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ 'delete/'.$d->id }}" onclick="return confirm('Apakah anda yakin ?')">Hapus</a>
                        <a class="btn btn-primary" href="{{'updatedata/'.$d->id}}"> Edit</a>
                    </td>
                </tr>
            @endforeach
            </thead>

        </table>
        <a type="button" href="{{'/tambahdata'}}" class="btn btn-primary">Tambah</a>
        </body>

@endsection


