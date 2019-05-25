@extends('layouts.app')

@section('content')

<header>
    <title>Daftar Dokumen</title>
</header>

<div class="container">
    <div class="col-md-12">
        <!-- Page Heading -->
            <h2 class="text-center">Dokumen yang Tersedia
              <!-- <small>Secondary Text</small> -->
            </h2>
            <br>
            <br>
            @if(count($sorted)===0)
                <h4>Maaf Tidak Ada Dokumen yang Tersedia</h4>
            @else
                @foreach($sorted as $j)

                        <div class="container">

                            <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xl-3 col-lg-4">
                                        <a>
                                          <img height="350px" width="250px" src="{{ url('/data_file/'.$j->image) }}" alt="">
                                        </a>
                                    </div>

                                    <div class="col-md-7">

                                        <h4>{{ "Dokumen : ". $j->namadokumen }}</h4>
                                        <h5>{{ "Biaya : ". $j->harga }} Rupiah</h5>
                                        <br>
                                        <p>{{ "Keterangan : ". $j->keterangan }}</p>

                                        <a class="btn btn-primary" href="viewjobpersonal/{{$j->id}}/" style = "position:absolute; top:312px;">View Document</a>
                                        @if(($j->user_id) == $users)
                                            <a href="/job/hapus/{{ $j->id }}"style = "position:absolute; top:312px; left:160px" class="btn btn-danger">Delete</a>
                                        @endif
                                    </div>

                            </div>
                                    <hr >
                        </div>
                    
                @endforeach
            @endif
            
    
</div>
<!-- /.container -->

@endsection
