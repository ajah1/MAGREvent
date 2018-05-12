@extends('layouts.master')

@section('title')
    Listado Tipos
@endsection

@section('content')
<div class="table-title">
<h3>Tabla Tipos</h3>
{!!Form::open(['route' => ['buscarTipo'],'method' => 'POST'])!!}
</div>

    {!!Form::select('tipo',['id' => 'Id','tipo_entrada' => 'Tipo de entrada','precio' => 'Precio'], null,['placeholder' => 'Filtro'])!!}

    <input type="search" name="buscar" id="buscar" method="POST">

    {!!Form::select('orden',['asc' => 'Ascendentemente','desc' => 'Descendentemente'], null,['placeholder' => 'Orden'])!!}

<button class="menus">
    <a href="{{ route('buscarTipo') }}">Buscar<span aria-hidden="true"></span></a>
</button>
{!!Form::close()!!}

<link rel="stylesheet" type="text/css" href="css/opcional.css">



<table class="table-fill">

<thead>
    <tr>
    <th class="text-left">Id entrada</th>
    <th class="text-left">Tipo entrada</th>
    <th class="text-left">Precio</th>
    <th class="text-left">Editar</th>

    </tr>
</thead>

    @foreach ($tipos as $tipo)

    <tbody class="table-hover">
    <tr>
    <td class="text-left">{{$tipo->id}}</td>
    <td class="text-left">{{$tipo->tipo_entrada}}</td>
    <td class="text-left">{{$tipo->precio}}</td>
    <td>
        <a href="{{ route('tipo.edit', $tipo->id) }}" class="btn btn-warning">Modificar<span aria-hidden="true"></span></a>

        <form action="{{ route('tipo.destroy', $tipo->id) }}" method="POST">
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
    {!!$tipos->render()!!}
</div>

@endsection