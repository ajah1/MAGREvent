@extends('layouts.crear')

@section('title')
    Modificar Entrada
@endsection

@section('content')

@include('alerts.request')

    {!!Form::open(['route' => ['entrada.update', $entrada->id], 'method' => 'PUT'])!!}

    {!!Form::label('Modificar entrada: Id -> ' . $entrada->id,null,['class' => 'texto'])!!}
    <div class="Registro">
    <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

    <span class="fontawesome-user"></span>
    {!!Form::text('cod_evento',$entrada->cod_evento,['placeholder' => 'Codigo evento'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('tipoEntrada',$entrada->tipoEntrada,['placeholder' => 'Tipo entrada'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('validacion',$entrada->validacion,['placeholder' => 'Validacion'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('informacion',$entrada->informacion,['placeholder' => 'Informacion'])!!}

    {!!Form::submit('Modificar')!!}
    
    {!!Form::close()!!}
@endsection