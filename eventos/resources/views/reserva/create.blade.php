@extends('layouts.crear')

@section('title')
    Crear Reserva
@endsection

@section('content')

@include('alerts.request')

    {!!Form::open(['route' => 'reserva.store', 'method' => 'POST'])!!}

    <p class="texto">Crear Reserva</p>
    <div class="Registro">
    <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

    <span class="fontawesome-user"></span>
    {!!Form::text('id',null,['placeholder' => 'Id reserva'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('id_evento',null,['placeholder' => 'Id evento'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('id_cliente',null,['placeholder' => 'Id cliente'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('descripcion',null,['placeholder' => 'Descripcion'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('cod_barras',null,['placeholder' => 'Codigo de barras'])!!}

    {!!Form::submit('Crear')!!}
    
    {!!Form::close()!!}
@endsection