@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">BIENVENIDO A TU PERFIL DE USUARIO</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif                   
                </div>
                <div class="panel-body">
                    <a>
                        Modificar datos personales
                    </a>
                </div>
                <div class="panel-body">
                    <a>
                        Futuros eventos
                    </a>
                </div>
                <div class="panel-body">
                    <a>
                        Eventos que me gustan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
