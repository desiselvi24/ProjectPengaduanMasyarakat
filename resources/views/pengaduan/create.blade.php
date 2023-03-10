html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                 PENGADUAN - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">

                    <form method="post" action="/pengaduan/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>tgl_pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="from-control" placeholder="tgl pengaduan">

                            @if($errors->has('tgl_pengaduan'))
                                <div class="date-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nik</label>
                        <input type="text" name="nik" class="form-control" placeholder="nik pengaduan .."></textarea>

                        @if($errors->has('nik'))
                            <div class="text-danger">
                                {{ $errors->first('nik')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>isi_laporan</label>
                        <input type="text" name="isi_laporan" class="form-control" placeholder="isi laporan .."></textarea>

                        @if($errors->has('isi_laporan'))
                            <div class="text-danger">
                                {{ $errors->first('isi_laporan')}}
                            </form>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="foto" name="foto" class="form-control" placeholder="foto pengaduan .."></textarea>

                        @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                    <label>status</label>
                    <input type="text" name="status" class="form-control" placeholder="status pengaduan .."></textarea>


                @if($errors->has('status'))
                    <div class="text-danger">
                    {{ $errors->first('status')}}
                </div>
            @endif

            </div>
            
             <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/pengaduan" class="btn btn-sm btn-primary">Kembali</a> 
                </div>

                </form>

            </div>
         </div>
     </div>
 </body>
 </html>
    
