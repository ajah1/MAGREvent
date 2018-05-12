@extends('layouts.crear')

@section('title')
    Crear Tipo
@endsection

@section('content')
@include('alerts.request')

    {!!Form::open(['route' => 'tipo.store', 'method' => 'POST'])!!}

    <p class="texto">Crear Tipo</p>
    <div class="Registro">
    <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

    <span class="fontawesome-user"></span>
    {!!Form::text('tipo_entrada',null,['placeholder' => 'Tipo entrada'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('precio',null,['placeholder' => 'Precio'])!!}

    {!!Form::submit('Registrar')!!}
    
    {!!Form::close()!!}
@endsection