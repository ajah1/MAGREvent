@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">BIENVENIDO AL PERFIL DE ADMINISTRADOR</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif                   
                </div>
                <div class="panel-body">
                    <a>
                        Listar usuarios
                    </a>
                </div>
                <div class="panel-body">
                    <a>
                        Crear evento
                    </a>
                </div>
                <div class="panel-body">
                    <a>
                        Calcular Ventas
                    </a>
                </div>
                <div class="panel-body">
                    <a>
                        Modificar evento
                    </a>
                </div>
                <div class="panel-body">
                    <a>
                        Modificar tipo
                    </a>
                </div>
                <div class="panel-body">
                    <a>
                        Modificar entrada
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection