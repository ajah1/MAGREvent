@extends('layouts.crear')

@section('title')
    Crear Entrada
@endsection

@section('content')

@include('alerts.request')

    {!!Form::open(['route' => 'entrada.store', 'method' => 'POST'])!!}

    <p class="texto">Crear Entrada</p>
    <div class="Registro">
    <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

    <span class="fontawesome-user"></span>
    {!!Form::text('id',null,['placeholder' => 'Id entrada'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('cod_evento',null,['placeholder' => 'Codigo evento'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('tipoEntrada',null,['placeholder' => 'Tipo entrada'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('validacion',null,['placeholder' => 'Validacion'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('informacion',null,['placeholder' => 'Informacion'])!!}

    {!!Form::submit('Crear')!!}
    
    {!!Form::close()!!}
@endsection