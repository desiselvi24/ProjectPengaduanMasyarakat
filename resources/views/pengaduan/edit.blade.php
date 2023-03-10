<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>EDIT DATA</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    DATA PENGADUAN MASYARAKAT
                </div>
                <div class="card-body">
               
                    <br/>
                    <br/>
                  
                     <form method="post" action="/pengaduan/update/{{ $pengaduan->id_pengaduan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" placeholder="tgl_pengaduan .." value=" {{ $pengaduan->tgl_pengaduan }}">
 
                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nik</label>
                            <textarea name="nik" class="form-control" placeholder="Nik" value=" {{ $pengaduan->nik_pengaduan }}"></textarea>
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>isi laporan</label>
                            <input type="text" name="isi_laporan" class="form-control" placeholder="isi_laporan .." value=" {{ $pengaduan->isi_laporan }}">

                             @if($errors->has('isi laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi laporan')}}
                                </div>
                            @endif 
 
                        </div>

                        <div class="form-group">
                            <label>foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="foto .." value=" {{ $pengaduan->foto_pengaduan }}">

                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif 
 
                        </div>

                        <div class="form-group">
                            <p>status</p>
                            <input type="radio" name="status" value="proses" /> Proses</p>
                            <input type="radio" name="status" value="selesai" /> Selesai</p>
                            @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-primary" value="Edit">
                            <input type="submit" class="btn btn-sm btn-danger" value="Simpan">
                            <a href="/pengaduan" class="btn btn-sm btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>