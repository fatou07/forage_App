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
                         password
                            </th>
                            <th>
                                role
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
                    { data: 'password', name: 'password' },
                    { data: 'roles_id', name: 'roles_id' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('users.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('users.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>'+
                        '<a class="btn btn-danger" href='+url_d+'><i class="material-icons">delete</i></a>';
                        },
                        "targets": 7
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
              
          });
      });
      </script>

          
      @endpush