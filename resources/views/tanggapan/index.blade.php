<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->
  @include('template.sidebar')

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-5 ">
          <div class="col-sm-12">

            <h1 class="m-0">Data Tanggapan</h1>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tanggapan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong> DATA TANGGAPAN </strong>  
                </div>
                <div class="card-body">
                    <a href="/tanggapan/create" class="btn btn-primary">Input tanggapan Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id_tanggapan</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Tanggapan</th>
                                <th>Nik</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $tanggapan)
                            <tr>
                                <td>{{ $tanggapan->id_tanggapan }}</td>
                                <td>{{ $tanggapan->tgl_tanggapan }}</td>
                                <td>{{ $tanggapan->tanggapan }}</td>
                                <td>{{ $tanggapan->nik }}</td>
                                <td>
                                    <a href="/tanggapan/edit/{{ $tanggapan->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/hapus/{{ $tanggapan->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

