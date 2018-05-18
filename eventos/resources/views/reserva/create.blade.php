
 <link href="{{asset('css/create.css')}}" rel="stylesheet">

@extends('layouts.crear')

@section('content')
    @include('alerts.request')
    
    {!!Form::open(['route' => 'reserva.store', 'method' => 'POST'])!!}

        <h1> Reserva</h1>
    
        <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">
        
        {!!Form::text('id',null,['placeholder' => 'Id reserva'])!!}
        {!!Form::text('id_evento',null,['placeholder' => 'Id evento'])!!}
        {!!Form::text('id_cliente',null,['placeholder' => 'Id cliente'])!!}
        {!!Form::text('descripcion',null,['placeholder' => 'Descripcion'])!!}
        {!!Form::text('cod_barras',null,['placeholder' => 'Codigo de barras'])!!}

        {!!Form::submit('Crear')!!}
    
    {!!Form::close()!!}
@endsection