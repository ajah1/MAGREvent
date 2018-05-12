@extends('layouts.crear')

@section('content')

@include('alerts.request')

{!!Form::open(['route' => ['reserva.update', $reserva->id],'method' => 'PUT'])!!}

{!!Form::label('Modificar reserva: Id -> ' . $reserva->id,null,['class' => 'texto'])!!}
<div class="Registro">

    <span class="fontawesome-user"></span>
    {!!Form::text('id_evento',$reserva->id_evento,['placeholder' => 'Id evento'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('id_cliente',$reserva->id_cliente,['placeholder' => 'Id cliente'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('descripcion',$reserva->descripcion,['placeholder' => 'Descripcion'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('cod_barras',$reserva->cod_barras,['placeholder' => 'Codigo de barras'])!!}

{!!Form::submit('Modificar')!!}

{!!Form::close()!!}
@endsection