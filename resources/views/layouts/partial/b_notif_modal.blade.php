<div class="modal fade" id="b_notif_modal" tabindex="-1" role="dialog" aria-labelledby="b_notif_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="b_notif_modalLongTitle">Translator's Information</h5>
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5" style="border-left:1px solid grey">
                            <img class="img-responsive img-modal img-center" style="width:170px; heigth: 170px" src="img/no-cover.jpeg" alt="">
                            <p class="text-center thick">{{App\User::find($request_a->translator_id)->name}}</p>
                            <!-- <a href='{{ url("/message/{$request_a->id}") }}' class="btn btn-dark btn-sm center">Message</a> -->
                    </div>
                    <div class="col-md" style="position:relative">
                        <table>
                            <tr>
                                <td valign="top"> Nama </td> <td valign="top">&nbsp;:&nbsp;</td>  <td> {{App\User::find($request_a->translator_id)->name}} </td>
                            </tr>
                            <tr>
                                <td valign="top"> No Telf. </td> <td valign="top">&nbsp;:&nbsp;</td>  <td> {{App\User::find($request_a->translator_id)->notelf}} </td>
                            </tr> 
                            <tr>
                                <td valign="top"> Email </td><td valign="top">&nbsp;:&nbsp;</td><td> {{App\User::find($request_a->translator_id)->email}} </td>
                            </tr> 
                        </table>
                    
                        <div class="" style="position:absolute;bottom:0px">
                            <a href='{{ url("/reject/{$request_a->id}") }}' class="btn btn-danger pull-right">Decline</a><span class="pull-right">&nbsp;&nbsp;</span>
                            <a href='{{ url("/accept/{$request_a->id}") }}' class="btn btn-primary pull-right">Accept</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <script>
          $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
            })
      </script>