<link href="{{asset('css/create.css')}}" rel="stylesheet">

@extends('layouts.crear')

@section('title')
    Crear Evento
@endsection

@section('content')

@include('alerts.request')

    <form action="{{route('newEvent')}}" enctype="multipart/form-data" method="post">
        {{csrf_field()}}

            <h1> Evento </h1>
            <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

            <input type="text" name="nombre" placeholder="Nombre" />
            <input type="text" name="fecha_inicio" placeholder="Fecha inicial" />
            <input type="text" name="fecha_fin" placeholder="Fecha final" />
            <input type="text" name="direccion" placeholder="Direccion" />
            <input type="file" name="imagen" />
            <input type="submit" value="Crear" />
    </form>
@endsection