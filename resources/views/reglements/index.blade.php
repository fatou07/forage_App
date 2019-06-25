@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SEN FORAGE</h4>
                  <p class="card-category"> Reglements
                      <a href="{{route('reglements.create')}}"><div class="btn btn-warning">Nouvelle Reglement Client <i class="material-icons">add</i></div></a> 
                      <a href="{{route('reglements.index')}}"><div class="btn btn-warning">Clients déja en Reglement  <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-reglements">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          uuid
                        </th>
                        <th>
                          Date 
                        </th>
                        <th>
                            Montant
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Facture
                          </th>
                          <th>
                         Comptable
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
          $('#table-reglements').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('reglements.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'uuid', name: 'uuid' },
                    { data: 'date', name: 'date' },
                    { data: 'montant', name: 'montant' },
                    { data: 'types_id', name: 'types_id' },
                    { data: 'factures_id', name: 'factures_id' },
                    { data: 'comptables_id', name: 'comptables_id' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('reglements.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('reglements.destroy',':id')!!}".replace(':id', data.id);
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