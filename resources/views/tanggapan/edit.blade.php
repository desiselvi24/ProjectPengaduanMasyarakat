<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data tanggapan - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/tanggapan/update/{{ $tanggapan->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Id_tanggapan</label>
                            <input type="text" name="id_tanggapan" class="form-control" placeholder="id_tanggapan tanggapan .." value=" {{ $tanggapan->id_tanggapan }}">
 
                            @if($errors->has('id_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal tanggapan</label>
                            <textarea name="id_tanggapan" class="form-control" placeholder="id_tanggapan tanggapan .."> {{ $tanggapan->id_tanggapan }} </textarea>
 
                             @if($errors->has('id_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder="tanggapan tanggapan .."> {{ $tanggapan->tanggapan }} </textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>