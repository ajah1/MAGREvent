@extends('layouts.master')

@section('title')
    Listado Eventos
@endsection

{!!Html::style('css/usuario.css')!!}
{!!Html::style('css/menu.css')!!}

@section('content')
<div class="table-title">
<h3>Resultados búsqueda</h3>
{!!Form::open(['route' => ['buscarEvento'],'method' => 'POST'])!!}
</div>

    {!!Form::select('tipo',['id' => 'Id','nombre' => 'Nombre','fecha_inicio' => 'Fecha inicio', 
    'fecha_fin' => 'Fecha fin', 'direccion' => 'Direccion'], null,['placeholder' => 'Filtro'])!!}

    <input type="search" name="buscar" id="buscar" method="POST">

    {!!Form::select('orden',['asc' => 'Ascendentemente','desc' => 'Descendentemente'], null,['placeholder' => 'Orden'])!!}

<button class="menus">
    <a href="{{ route('buscarEvento') }}">Buscar<span aria-hidden="true"></span></a>
</button>
{!!Form::close()!!}

<link rel="stylesheet" type="text/css" href="css/opcional.css">

<table class="table-fill">

<thead>
    <tr>
    <th class="text-left">Id</th>
    <th class="text-left">Nombre</th>
    <th class="text-left">Fecha inicio</th>
    <th class="text-left">Fecha fin</th>
    <th class="text-left">Direccion</th>
    <th class="text-left">Editar</th>

    </tr>
</thead>

    @foreach ($eventos as $evento)

    <tbody class="table-hover">
    <tr>
    <td class="text-left">{{$evento->id}}</td>
    <td class="text-left">{{$evento->nombre}}</td>
    <td class="text-left">{{$evento->fecha_inicio}}</td>
    <td class="text-left">{{$evento->fecha_fin}}</td>
    <td class="text-left">{{$evento->direccion}}</td>
    <td>
        <a href="{{ route('evento.edit', $evento->id) }}" class="btn btn-warning">Modificar<span aria-hidden="true"></span></a>

        <form action="{{ route('evento.destroy', $evento->id) }}" method="POST">
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
    {!!$eventos->render()!!}
</div>
@endsection
