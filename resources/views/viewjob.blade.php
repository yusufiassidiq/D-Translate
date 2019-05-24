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
                        <h5>{{ "Biaya : ". $job->harga }} Rupiah</h5>
                        <br>
                        <p>{{ "Keterangan : ". $job->keterangan }}</p>
                        <div class="form-group">
                            @if(($job->user_id) != $users)
                            <a class="btn btn-primary" data-toggle="modal" href="" style = "position:absolute; top:312px;" data-target="#myModal">Terjemahkan</a>
                            <a href="{{url('/data_file/'.$job->file)}}" style = "position:absolute; top:312px;left:130px;" class="btn btn-primary">Download</a>
                            <a href="/listjob" class="btn btn-secondary" style = "position:absolute; top:312px;left:228px;">Kembali</a>
                            @else
                            <a href="/listjob" class="btn btn-secondary" style = "position:absolute; top:312px;">Kembali</a>
                            @endif
                        </div>
                    </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Informasi Pemilik Dokumen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <table>
                                    <tr>
                                      <td valign="top"><h5>Nama</h5> </td> <td valign="top">&nbsp;:&nbsp;</td> <td> <h5> {{App\User::find($job->user_id)->name}} </h5> </td>
                                    </tr>
                                    <tr>
                                      <td valign="top"><h5> Phone Number</h5> </td> <td valign="top">&nbsp;:&nbsp;</td>  <td> <h5>{{App\User::find($job->user_id)->notelf}} </h5></td>
                                    </tr> 
                                    <tr>
                                      <td valign="top"><h5> Email</h5> </td><td valign="top">&nbsp;:&nbsp;</td><td> <h5> {{App\User::find($job->user_id)->email}} </h5> </td>
                                    </tr> 
                                </table>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <!-- <button type="button" class="btn btn-primary">Kirim Permintaan</button> -->
                                @if(( App\Job::where([['user_id', $users],['id', $job->id]])->first() )) <!--user_id=ownerjob/ownerdocument-->
                                  <a class="disabled">Cannot translate your own document</a>
                                @elseif( !( App\Activity::where([['translator_id', $users],['job_id', $job->id]])->first() )  )
                                  <a href='{{ url("/request/$job->id") }}' class="btn btn-primary">Send Request</a>
                                @elseif(( App\Activity::where([['translator_id', $users],['job_id', $job->id]])->first() ))
                                  <a class="disabled">Request Sent</a>
                                @else
                                 <a class="disabled">SOMETHING WRONG :(</a>
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>            
                </div>
            </div>
        </div>
    </div>

@endsection