@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SEN FORAGE</h4>
                  <p class="card-category"> Departements
                      <a href="{{route('abonnements.create')}}"><div class="btn btn-warning">Nouveau Departement <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-departements">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                        Noms
                        </th>
                        <th>
                            Regions
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
          $('#table-departements').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('departements.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nom', name: 'nom' },
                    { data: 'regions_id', name: 'regions_id' },
                 
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('departements.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('departements.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>'+
                        '<a class="btn btn-danger" href='+url_d+'><i class="material-icons">delete</i></a>';
                        },
                        "targets": 3
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