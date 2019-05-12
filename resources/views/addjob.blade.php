<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
</head>
<header><title>Tambah Dokumen Baru</title></header>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top py-3" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    D Translate
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                        
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <br>
        <br>
        <br>
        <main class="py-4">

            <body>
                    <div class="container"  >
                        <div class="col-md-7" style = "position:absolute; left:250px; top:40px;">
                            <div class="card mt-5">
                                <div class="card-header text-center">
                                    <strong>TAMBAH DOKUMEN</strong>
                                </div>
                                <div class="card-body">
                                    <br/>                 
                                    <form method="post" action="/listjob/store" enctype="multipart/form-data">

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
		            				        <label>Gambar</label><br/>
                                            <input type="file" name="image">
                                            @if($errors->has('image'))
                                                <div class="text-danger">
                                                    {{ $errors->first('image')}}
                                                </div>
                                            @endif
		            			        </div>

                                        <div class="form-group">
		            				        <label>File</label><br/>
                                            <input type="file" name="file">
                                            @if($errors->has('file'))
                                                <div class="text-danger">
                                                    {{ $errors->first('file')}}
                                                </div>
                                            @endif
		            			        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" value="Simpan">
                                            <a href="/listjob" class="btn btn-primary" style = "position:absolute; right:20px;">Kembali</a>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
            </body>
        </main>
    </div>
</html>