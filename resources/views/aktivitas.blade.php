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
                                @if($requests_translate->isEmpty())
                                    <p class="center thick">No recent activities.</p>
                                @endif  
                                    @foreach($requests_translate->all() as $request_t)
                                    @if($request_t->status==0)
                                        <p><small class="text-muted">{{ $request_t->request_date }} </small>You sent request to {{App\User::find($request_t->user_id)->name}} to translate "{{ App\Job::find($request_t->job_id)->namadokumen }}"</p>
                                    @endif
                                    @if($request_t->status==1)
                                        <p><small class="text-muted">{{ $request_t->accept_date }} </small>{{App\User::find($request_t->user_id)->name}} accepted your request for translating "{{ App\Job::find($request_t->job_id)->namadokumen }}"! <a href="viewjob/{{$request_t->job_id}}/"  class="btn btn-primary">Download Document</a>  </p>
                                    @endif
                                    @if($request_t->status==2)
                                    <p><small class="text-muted">{{ $request_t->return_date }} </small>You have returned {{App\User::find($request_t->user_id)->name}}'s "{{ App\Job::find($request_t->job_id)->namadokumen }}" document</p>
                                    @endif
                                    @if($request_t->status==3)
                                    <p><small class="text-muted">{{ $request_t->reject_date }} </small>{{App\User::find($request_t->user_id)->name}} have declined your request for translating "{{ App\Job::find($request_t->job_id)->namadokumen }}"</p>
                                    @endif
                                    
                                    @endforeach
                                    <hr>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="lend" role="tabpanel" aria-labelledby="lend-tab">
                            <div class="card-body">
                                @if($requests_accept->isEmpty())
                                    <p class="center thick">No recent activities.</p>
                                @endif  
                                    @foreach($requests_accept->all() as $request_a) 
                                    @if($request_a->status==0)
                                        <p><small class="text-muted">{{ $request_a->request_date }} </small>{{App\User::find($request_a->translator_id)->name}} wants to translate your document named "{{ App\Job::find($request_a->job_id)->namadokumen }}" 
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#b_notif_modal">
                                                See Details
                                            </button> 
                                        </p>
                                        @include('layouts.partial.b_notif_modal')
                                    @endif
                                    @if($request_a->status==1)
                                    <p><small class="text-muted">{{ $request_a->accept_date }} </small>You accept {{App\User::find($request_a->translator_id)->name}} to translate your document named "{{ App\Job::find($request_a->job_id)->namadokumen }}" <a href='{{ url("/return/{$request_a->id}") }}' class="btn btn-primary pull-right">I have received my document back</a></p>
                                    
                                    @endif
                                    @if($request_a->status==2)
                                    <p><small class="text-muted">{{ $request_a->return_date }} </small>{{App\User::find($request_a->translator_id)->name}} have returned your document named "{{ App\Job::find($request_a->job_id)->namadokumen }}"</p>
                                    @endif
                                    @if($request_a->status==3)
                                    <p><small class="text-muted">{{ $request_a->reject_date }} </small>You have declined {{App\User::find($request_a->translator_id)->name}}'s request for translating "{{ App\Job::find($request_a->job_id)->namadokumen }}"</p>
                                    @endif
                                    @endforeach
                                    <hr>
                            </div>    
                        </div>
                    </div>
                    <a href="/listjob" class="btn btn-secondary" style = "position:absolute; right:0px;">Kembali</a>
                </div>
            
        
    </div>
</div>
            <!-- /.card -->
@endsection