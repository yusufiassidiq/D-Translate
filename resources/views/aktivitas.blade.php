@extends('layouts.app')

@section('content')
<!-- /.card -->
<div class="container">
    <div class="card">
        
            
                <div class="card col-13 center pb-2">
                    <ul class="nav nav-tabs" id="userTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="true">Riwayat Aktivitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="borrow-tab" data-toggle="tab" href="#borrow" role="tab" aria-controls="borrow" aria-selected="false">Menerjemahkan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="lend-tab" data-toggle="tab" href="#lend" role="tab" aria-controls="lend" aria-selected="false">Dokumenmu</a>
                        </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                            <div class="card-body">
                               
                                <hr>
                                
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="borrow" role="tabpanel" aria-labelledby="borrow-tab">
                            <div class="card-body">
                                
                                    <hr>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="lend" role="tabpanel" aria-labelledby="lend-tab">
                            <div class="card-body">
                                
                                    
                                <hr>
                            </div>    
                        </div>
                    </div>
                </div>
            
        
    </div>
</div>
            <!-- /.card -->
@endsection