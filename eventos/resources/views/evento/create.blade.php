@extends('layouts.crear')

@section('title')
    Crear Evento
@endsection

@section('content')

@include('alerts.request')

    <form action="{{route('newEvent')}}" enctype="multipart/form-data" method="post">
    {{csrf_field()}}

        <p class="texto">Crear Evento</p>
        <div class="Registro">
        <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

        <span class="fontawesome-user"></span>
        <input type="text" name="nombre" placeholder="Nombre" />

        <span class="fontawesome-user"></span>
        <input type="text" name="fecha_inicio" placeholder="Fecha inicial" />

        <span class="fontawesome-user"></span>
        <input type="text" name="fecha_fin" placeholder="Fecha final" />

        <span class="fontawesome-user"></span>
        <input type="text" name="direccion" placeholder="Direccion" />

        <span class="fontawesome-user"></span>
        <input type="file" name="imagen" />

        <input type="submit" value="Crear" />
    
    </form>
@endsection