<!doctype html>
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
        <div class="row mb-2">
          <div class="col-sm-12">

            <h1 class="m-0">Starter Page</h1>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>tanggapan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Laporan - <strong>TAMBAH LAPORAN</strong>
                </div>
                <div class="card-body">
                    
                    <form method="post" action="/tanggapan/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>id_tanggapan</label>
                            <input type="text" name="id_tanggapan" class="form-control" placeholder=""></input>
 
                            @if($errors->has('id_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal tanggapan</label>
                            <input type="date" name="tgl_tanggapan" class="form-control"></input>
 
                             @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>tanggapan</label>
                            <input type="text" name="tanggapan" class="form-control"></input>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nik</label>
                            <textarea name="nik" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>