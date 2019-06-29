@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Factures
                      <a href="{{route('factures.create')}}"><div class="btn btn-warning">Nouvelle Facture <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-factures">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          date limite
                        </th>
                       
                        <th>
                          Montant
                        </th>
                        <th>
                          debut Cons
                          </th>
                          <th>
                         fin Cons
                            </th>
                            <th>
                                reglement_type
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
          $('#table-factures').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('factures.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'date_limite', name: 'date_limite' },
                   /*  { data: 'details', name: 'details' }, */
                    { data: 'montant', name: 'montant' },
                    { data: 'debut_consommation', name: 'debut_consommation' },
                    { data: 'fin_consommation', name: 'fin_consommation' },
                    { data: 'reglement.type.name', name: 'reglement.type.name' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('factures.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('factures.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>'+
                        '<a class="btn btn-danger" href='+url_d+'><i class="material-icons">delete</i></a>';
                        },
                        "targets": 6
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