<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title> -->
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH DOKUMEN</strong>
                </div>
                <div class="card-body">
                    <a href="/listjob" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/listjob/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="namadokumen" class="form-control" placeholder="Nama Dokumen">
 
                            @if($errors->has('namadokumen'))
                                <div class="text-danger">
                                    {{ $errors->first('namadokumen')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan Dokumen"></textarea>
 
                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="text" name="harga" class="form-control" placeholder="Biaya yang disediakan">
 
                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
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