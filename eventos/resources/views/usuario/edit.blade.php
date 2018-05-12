@extends('layouts.crear')

@section('content')

@include('alerts.request')

    {!!Form::open(['route' => ['usuario.update', $user->id],'method' => 'PUT'])!!}

    {!!Form::label('Modificar usuario: Id -> ' . $user->id,null,['class' => 'texto'])!!}
    <div class="Registro">

    <span class="fontawesome-user"></span>
    {!!Form::text('name',$user->name,['placeholder' => 'Nombre'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('apellidos',$user->apellidos,['placeholder' => 'Apellidos'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('email',$user->email,['placeholder' => 'Email'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('edad',$user->edad,['placeholder' => 'Edad'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('direccion',$user->direccion,['placeholder' => 'Direccion'])!!}

    <span class="fontawesome-user"></span>
    {!!Form::text('username',$user->username,['placeholder' => 'Username'])!!}

    {!!Form::submit('Modificar')!!}
    
    {!!Form::close()!!}
@endsection
