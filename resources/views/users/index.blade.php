@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SEN FORAGE</h4>
                  <p class="card-category"> users
                      <a href="{{route('users.create')}}"><div class="btn btn-warning">Nouvelle Utilisateurs <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-users">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          firstname
                        </th>
                        <th>
                            name
                        </th>
                        <th>
                          telephone
                        </th>
                        <th>
                          email
                          </th>
                         
                            <th>
                                Action
                                   </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
      
<div class="modal fade" id="modal_delete_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="POST" action="" id="form_delete_user">
    @csrf
    @method('DELETE')
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">etes-vous  sur de supprimer</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="">appuyer sur close pour annuler</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- <div class="modal-body">
        ...
      </div> --}}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Supprimer</button>
      </div>
    </div>
  </div>
</form>
</div>
{{-- // modifier --}}
<div class="modal fade" id="modal_update_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="POST" action="" id="form_update_user">
    @csrf
    @method('EDIT')
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">voulez-vous modifier</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="">appuyer sur close pour annuler</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- <div class="modal-body">
        ...
      </div> --}}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </div>
  </div>
</form>
</div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('users.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'name', name: 'name' },
                    { data: 'telephone', name: 'telephone' },
                    { data: 'email', name: 'email' },
                  
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('users.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('users.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>'+
                        '<div class="btn btn-danger  put btn-delete-user" title="supprimer" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                        '<div class="btn btn-danger  put btn-edit-user" title="Modifier" data-href='+url_d+'><i class="material-icons">edit</i></div>';
                        },
                        "targets": 5
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
                $("#table-users").off('click','.btn-delete-user').on('click','.btn-delete-user',function(){
            var href=$(this).data('href');
            $("#form_delete_user").attr("action",href);
                  
                  $('#modal_delete_user').modal();
                });
                  
                  $("#table-users").off('click','.btn-edit-user').on('click','.btn-edit-user',function(){
            var href=$(this).data('href');
            $("#form_edit_user").attr("action",href);
                  
                  $('#modal_edit_user').modal();
                  
              
          });
      });
      </script>

          
      @endpush