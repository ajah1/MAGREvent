<link href="{{asset('css/create.css')}}" rel="stylesheet">

@extends('layouts.crear')

@section('title')
    Crear Entrada
@endsection

@section('content')

@include('alerts.request')

    {!!Form::open(['route' => 'entrada.store', 'method' => 'POST'])!!}

        <h1> Entrada </h1>
        <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

        {!!Form::text('id',null,['placeholder' => 'Id entrada'])!!}
        {!!Form::text('cod_evento',null,['placeholder' => 'Codigo evento'])!!}
        {!!Form::text('tipoEntrada',null,['placeholder' => 'Tipo entrada'])!!}
        {!!Form::text('validacion',null,['placeholder' => 'Validacion'])!!}
        {!!Form::text('informacion',null,['placeholder' => 'Informacion'])!!}

        {!!Form::submit('Crear')!!}
    
    {!!Form::close()!!}
@endsection