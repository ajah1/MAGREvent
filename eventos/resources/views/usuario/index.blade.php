<!DOCTYPE html>
@extends('layouts.master')

{!!Html::style('css/admin.css')!!}

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="body-wrapper container">
    <div class="panel">
    <div class="aside">
        <div class="avatar"><img src="https://66.media.tumblr.com/avatar_faa95867d2b3_128.png"/></div>
        <div class="seperator"></div>
        <div class="list">
        <div class="item">
            <a href="{{ route('home') }}">
                PERFIL
            </a>
        </div>
        <div class="seperator"></div>
        <div class="item">
            <a href="{{route('crearEvento')}}">    
                CREAR EVENTO
            </a>
        </div>
        <div class="seperator"></div>
        <div class="item">
            <a href="{{route('crearEntrada')}}">    
                CREAR ENTRADA
            </a>
        </div>
        <div class="seperator"></div>
        <div class="item selected">
            <a href="{{route('listarUsers')}}">    
                LISTAR USUARIOS
            </a>
        </div>
        <div class="seperator"></div>
        </div>
        <div class="log-out">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Logout
            </a>
        </div>
    </div>
    <div class="view">
        <div class="sub-title">PANEL DEL ADMINISTRADOR</div>
        <div class="main-title">LISTA DE USUARIOS</div>
        <div class="seperator"></div>
        <div class="table-title">
</div>

<table class="table table-hover table-striped table-bordered" > 

    <thead>
        <tr>
            <th>Id usuario</th>
            <th>Dni</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>Tipo</th>
            <th>Username</th>
            <th>Password</th>
            <th >Operacion</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->dni}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->edad}}</td>
                <td>{{$user->direccion}}</td>
                <td>{{$user->tipo}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>
                {!!Form::open(['route' => ['borrarUsuario', $user->id], 'method' => 'DELETE'])!!}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger">Eliminar</button>
                {!!Form::close()!!}
                </td>
            </tr>
        @endforeach

    </tbody>

</table>