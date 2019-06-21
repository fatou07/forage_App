@extends('layout.default')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Enregistrer une nouvelle Reglement</h3>
                <p class="card-category">Reglements
                    {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                    {{-- <a href="#" target="_blank">full documentation.</a> --}}
                </p>
            </div>
            <div class="card-body">
                <div class="row pt-5"></div>
                
                <form method="POST" action="{{route('reglements.store')}}">
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
                        <label for="exampleInputInfo1">Montant</label>
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
                        <label for="exampleInputType1">type de la facture</label>
                        <input type="number" name="type" class="form-control" id="exampleInputType1" aria-describedby="typeHelp" placeholder="Enter le type de la facture">
                        <small id="montantHelp" class="form-text text-muted">
                            @if ($errors->has('type'))
                            @foreach ($errors->get('type') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputComptable1">comptable</label>
                        <input type="number" name="comptable" class="form-control" id="exampleInputComptable1" aria-describedby="comptableHelp" placeholder="Enter id du comptable">
                        <small id="comptableHelp" class="form-text text-muted">
                            @if ($errors->has('comptable'))
                            @foreach ($errors->get('comptable') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFacture1">numero facture</label>
                        <input type="number" name="facture" class="form-control" id="exampleInputFacture1" aria-describedby="factureHelp" placeholder="Enter le numero de la facture">
                        <small id="factureHelp" class="form-text text-muted">
                            @if ($errors->has('facture'))
                            @foreach ($errors->get('facture') as $message)
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
                    
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="submit" class="btn btn-primary">Annuler</button>
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