@extends('layouts.master')

@section('title')
    Listado Reservas
@endsection

{!!Html::style('css/usuario.css')!!}
{!!Html::style('css/menu.css')!!}

@section('content')
<div class="table-title">
<h3>Tabla Reservas</h3>
{!!Form::open(['route' => ['buscarReserva'],'method' => 'POST'])!!}
</div>
    {!!Form::select('tipo',['id' => 'Id','id_evento' => 'Identificador evento','id_cliente' => 'Identificador cliente',
    'descripcion' => 'Descripcion', 'cod_barras' => 'Código de barras', 
    ], null,['placeholder' => 'Filtro'])!!}

    <input type="search" name="buscar" id="buscar" method="POST">

    {!!Form::select('orden',['asc' => 'Ascendentemente','desc' => 'Descendentemente'], null,['placeholder' => 'Orden'])!!}

<button class="menus">
    <a href="{{ route('buscarReserva') }}">Buscar<span aria-hidden="true"></span></a>
</button>
{!!Form::close()!!}

<link rel="stylesheet" type="text/css" href="css/opcional.css">

<table class="table-fill">

<thead>
    <tr>
    <th class="text-left">Id</th>
    <th class="text-left">Identificador evento</th>
    <th class="text-left">Identificador cliente</th>
    <th class="text-left">Descripcion</th>
    <th class="text-left">Código de barras</th>
    <th class="text-left">Opciones</th>

    </tr>
</thead>

    @foreach ($reservas as $reserva)

    <tbody class="table-hover">
    <tr>
    <td class="text-left">{{$reserva->id}}</td>
    <td class="text-left">{{$reserva->id_evento}}</td>
    <td class="text-left">{{$reserva->id_cliente}}</td>
    <td class="text-left">{{$reserva->descripcion}}</td>
    <td class="text-left">{{$reserva->cod_barras}}</td>
    <td>
        <a href="{{ route('reserva.edit', $reserva->id) }}" class="btn btn-warning">Modificar<span aria-hidden="true"></span></a>

        <form action="{{ route('borrar', [$reserva->id,$reserva->id_evento,$reserva->id_cliente]) }}" method="POST">
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
    {!!$reservas->render()!!}
</div>
@endsection