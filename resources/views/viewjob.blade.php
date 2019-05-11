@extends('layouts.app')

@section('content')
<header>
    <title>{{$job->namadokumen}}</title>
</header>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xl-3 col-lg-4">
                    <a href="{{ url('/data_file/'.$job->image) }}">
                        <img height="350px" width="250px" src="{{ url('/data_file/'.$job->image) }}" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <h2 class="card-title"> Nama Dokumen : {{$job->namadokumen}}</h2>
                    <h5>{{ "Biaya : ". $job->harga }}</h5>
                    <br>
                    <p>{{ "Keterangan : ". $job->keterangan }}</p>
                    <div class="form-group">
                        <a class="btn btn-primary" href="#" style = "position:absolute; top:312px;">Terjemahkan</a>
                        <a href="{{url('/data_file/'.$job->file)}}" style = "position:absolute; top:312px;left:130px;" class="btn btn-primary">Download</a>
                        <a href="/listjob" class="btn btn-secondary" style = "position:absolute; top:312px;left:228px;">Kembali</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

@endsection