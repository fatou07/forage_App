@extends('layout.default')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Enregistrer une nouvelle facture</h3>
                <p class="card-category">Factures
                    {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                    {{-- <a href="#" target="_blank">full documentation.</a> --}}
                </p>
            </div>
            <div class="card-body">
                <div class="row pt-5"></div>
                
                <form method="POST" action="{{route('factures.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input-nom">Nom Client</label>
                        <input type="text" name="nom" class="form-control" id="input-nom" aria-describedby="nomHelp" placeholder="Nom du client">
                        <small id="input-nom-help" class="form-text text-muted">
                            @if ($errors->has('nom'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('nom') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputInfo1">details de la facture</label>
                        <input type="text" name="info" class="form-control" id="exampleInputMontant1" aria-describedby="montantHelp" placeholder="informations">
                        <small id="montantHelp" class="form-text text-muted">
                            @if ($errors->has('montant'))
                            @foreach ($errors->get('montant') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMontant1">montant de la facture</label>
                        <input type="number" name="montant" class="form-control" id="exampleInputMontant1" aria-describedby="montantHelp" placeholder="Enter le montant">
                        <small id="montantHelp" class="form-text text-muted">
                            @if ($errors->has('montant'))
                            @foreach ($errors->get('montant') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDebut1">debut de consommation</label>
                        <input type="date" name="debut" class="form-control" id="exampleInputDebut1" aria-describedby="emailHelp" placeholder="Enter la date de debut de consommation">
                        <small id="dateHelp" class="form-text text-muted">
                            @if ($errors->has('debut'))
                            @foreach ($errors->get('debut') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFin1">fin de consommation</label>
                        <input type="date" name="fin" class="form-control" id="exampleInputFin1" aria-describedby="dateHelp" placeholder="Enter la date de fin de consommation">
                        <small id="dateHelp" class="form-text text-muted">
                            @if ($errors->has('fin'))
                            @foreach ($errors->get('fin') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                   {{--  <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        @if ($errors->has('password'))
                        @foreach ($errors->get('password') as $message)
                        <p class="text-danger">{{ $message }}</p>
                        @endforeach
                        @endif
                    </div> --}}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            Option one is this
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Creer</button>
                </form>
                <div class="row justify-content-center">
                    @if ($errors->any())
                  
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection