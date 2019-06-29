@extends('layout.default')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title">Enregistrement</h3>
                <p class="card-category">nouveau Compteur
                    {{-- <a target="_blank" href="#">Robert McIntosh</a>. Please checkout the --}}
                    {{-- <a href="#" target="_blank">full documentation.</a> --}}
                </p>
            </div>
            <div class="card-body">
                <div class="row pt-5"></div>
                
                <form method="POST" action="{{route('compteurs.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input-ID">ID</label>
                        <input type="number" name="id" class="form-control" id="input-id" aria-describedby="idHelp" placeholder="id du compteur">
                        <small id="input-id-help" class="form-text text-muted">
                            @if ($errors->has('id'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('id') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="input-numero">numero serie</label>
                        <input type="number" name="numero" class="form-control" id="input-numero" aria-describedby="numeroHelp" placeholder="entrer le numero de serie">
                        <small id="input-numero-help" class="form-text text-muted">
                            @if ($errors->has('numero'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('numero') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputdate">date de creation</label>
                        <input type="date" name="date" class="form-control" id="exampleInputdate" aria-describedby="dateHelp" placeholder="Enter la date">
                        <small id="dateHelp" class="form-text text-muted">
                            @if ($errors->has('date'))
                            @foreach ($errors->get('date') as $message)
                            <p class="text-danger">{{ $message }}</p>
                            @endforeach
                            @endif
                        </small>
                    </div>
                    {{-- <div class="form-group">
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
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
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