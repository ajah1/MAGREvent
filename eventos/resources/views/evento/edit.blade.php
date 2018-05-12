@extends('layouts.crear')

@section('title')
    Modificar Evento
@endsection

@section('content')

@include('alerts.request')

    {!!Form::open(['route' => ['evento.update', $evento->id], 'method' => 'PUT'])!!}
    {!!Form::label('Modificar evento: Id -> ' . $evento->id,null,['class' => 'texto'])!!}
    <div class="Registro">
    <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

    <span class="fontawesome-user"></span>
    {!!Form::text('nombre',$evento->nombre,['placeholder' => 'Nombre'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('fecha_inicio',$evento->fecha_inicio,['placeholder' => 'Fecha inicial'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('fecha_fin',$evento->fecha_fin,['placeholder' => 'Fecha final'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('direccion',$evento->direccion,['placeholder' => 'Direccion'])!!}

    {!!Form::submit('Modificar')!!}
    
    {!!Form::close()!!}

@endsection