@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- diganti pake logo ya klo sempet -->
                <p><a href="{{ route('plogin') }}">Personal</a></p>
                <p><a href="{{ route('clogin') }}">Company</a></p>
                <p><a href="{{ route('tlogin') }}">Translator</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
