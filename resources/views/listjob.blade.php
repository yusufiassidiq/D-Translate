@extends('layouts.app')

@section('content')

<header>
    <title>Daftar Dokumen</title>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
            <!-- <img class="carousel-item active" src="../img/slider1.jpg"> -->

      <!-- Slide Two - Set the background image for this slide in the line below -->
            <!-- <img class="carousel-item" src="../img/slider2.jpg"> -->

      <!-- Slide Three - Set the background image for this slide in the line below -->
            <!-- <img class="carousel-item" src="../img/slider3.jpg"> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<div class="container">
    <div class="col-md-12">
        <!-- Page Heading -->
            <h2 class="text-center">Dokumen yang Tersedia
              <!-- <small>Secondary Text</small> -->
            </h2>
            <br>
            <br>
        @foreach($sorted as $j)
            <div class="container">

                <!-- <table class="row">
                    <thead>
                        <tr>
                    <th>
                        <a href="#">
                            <img width="200px" class="img-fluid rounded mb-3 mb-md-0" src="{{ url('/data_file/'.$j->file) }}" alt="">
                        </a>
                    </th>
                    <th>
                        <div class="col-md-15">
                            <h4>{{ "Dokumen : ". $j->namadokumen }}</h4>
                            <h5>{{ "Biaya : ". $j->harga }}</h5>
                            <p>{{ "Keterangan : ". $j->keterangan }}</p>
                            <a class="btn btn-primary" href="#" style = "position:absolute; top:160px;">View Project</a> -->
                            <!-- <a class="btn btn-primary" href="#" >View Project</a>
                        </div>                      
                    </th>
                        </tr>
                    </thead>
                </table>
                <hr> -->
                <div class="row">
    
                        <div class="col-md-4 col-sm-4 col-xl-3 col-lg-4">
                            <a href="#">
                              <img height="200px" width="250px" src="{{ url('/data_file/'.$j->file) }}" alt="">
                            </a>
                        </div>

                        <div class="col-md-7">

                            <h4>{{ "Dokumen : ". $j->namadokumen }}</h4>
                            <h5>{{ "Biaya : ". $j->harga }}</h5>
                            <p>{{ "Keterangan : ". $j->keterangan }}</p>

                            <a class="btn btn-primary" href="#" style = "position:absolute; top:163px;">View Project</a>
                            <!-- <a class="btn btn-primary" href="#" >View Project</a> -->
                        </div>
                    
                </div>
                        <hr>
            </div>
        @endforeach
    
</div>
<!-- /.container -->

@endsection
