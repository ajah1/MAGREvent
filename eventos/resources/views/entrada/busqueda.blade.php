@extends('layouts.master')

@section('title')
    Listado Entradas
@endsection

{!!Html::style('css/usuario.css')!!}
{!!Html::style('css/menu.css')!!}

@section('content')
<div class="table-title">
<h3>Resultados búsqueda</h3>
{!!Form::open(['route' => ['buscarEntrada'],'method' => 'POST'])!!}
</div>

    {!!Form::select('tipo',['id' => 'Id','cod_evento' => 'Código evento','tipoEntrada' => 'Tipo entrada', 
    'validacion' => 'Validación', 'informacion' => 'Información'], null,['placeholder' => 'Filtro'])!!}

    <input type="search" name="buscar" id="buscar" method="POST">

    {!!Form::select('orden',['asc' => 'Ascendentemente','desc' => 'Descendentemente'], null,['placeholder' => 'Orden'])!!}

<button class="menus">
    <a href="{{ route('buscarEntrada') }}">Buscar<span aria-hidden="true"></span></a>
</button>
{!!Form::close()!!}

<link rel="stylesheet" type="text/css" href="css/opcional.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/usuario.css">

<table class="table-fill">
<thead>
    <tr>
    <th class="text-left">Id entrada</th>
    <th class="text-left">Código evento</th>
    <th class="text-left">Tipo entrada</th>
    <th class="text-left">Validación</th>
    <th class="text-left">Información</th>
    <th class="text-left">Opciones</th>
    </tr>
</thead>

    @foreach ($entradas as $entrada)

    <tbody class="table-hover">
    <tr>
    <td class="text-left">{{$entrada->id}}</td>
    <td class="text-left">{{$entrada->cod_evento}}</td>
    <td class="text-left">{{$entrada->tipoEntrada}}</td>
    <td class="text-left">{{$entrada->validacion}}</td>
    <td class="text-left">{{$entrada->informacion}}</td>
    <td>
        <a href="{{ route('entrada.edit', $entrada->id) }}" class="btn btn-warning">Modificar<span aria-hidden="true"></span></a>

        <form action="{{ route('entrada.destroy', $entrada->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-link">Eliminar</button>
        </form>
    </td>
    </tr>
    </tbody>
    @endforeach
</table>

<div class="paguinacion"
    {!!$entradas->render()!!}
</div>
@endsection