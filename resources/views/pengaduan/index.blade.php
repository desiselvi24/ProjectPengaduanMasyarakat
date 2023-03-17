<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pengaduan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengaduan</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <body>
        <div class="container">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Data Pengaduan
                    </div>
                    <div class="card-body">
                        <a href="/pengaduan/create" class="btn btn-primary">Input Pengaduan Baru</a>
                        <br/>
                        <br/>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Nik</th>
                                    <th>Isi Laporan</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengaduan as $p)
                                <tr>
                                    <td>{{ $p->tgl_pengaduan }}</td>
                                    <td>{{ $p->nik }}</td>
                                    <td>{{ $p->isi_laporan }}</td>
                                    <td><img src="{{ asset('image/'. $p->foto)}}" height="20%" width="30%" alt="pengaduan"/></td>
                                    <td>{{ $p->status }}</td>
                                    <td>
                                        <!-- <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn btn-warning">Edit</a> -->
                                        <a href="/pengaduan/delete/{{ $p->id_pengaduan }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </body>      







    <!-- <div class="content">
     <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{route('/pengaduan/create')}}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                       <th>No</th>
                        <th>tgl_pengaduan</th>
                        <th>nik</th>
                        <th>isi_laporan</th>
                        <th>foto</th>
                        <th>status</th>
                        <th>OPSI</th>
                    </tr>
                    @foreach ($pengaduan as $item)
                   
                    <tr>
                      <td>{{ $loop->iteration}}</td>
                        <td>{{date('d-m-y', strtotime ($item->tgl_pengaduan)) }}</td>
                        <td>{{ $item->nik}}</td>
                        <td>{{ $item->isi_laporan}}</td>
                        <td>{{ $item->status}}</td>
                        <td><img src="{{ asset('image/'. $item->foto)}}" height="20%" width="30%" alt="pengaduan"/></td>
                        <td>
                          <a href="/destroy/{{ $item->id_pengaduan }}" class="fas fa-trash-alt" style="color: red"></a>
                        </td>
                    </tr>
                    @endforeach
         </table>
    </div>
    </div>
</div>
    </div> -->
    <!-- /.content -->
  </div>
</html>