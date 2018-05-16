<!DOCTYPE html>
@extends('layouts.master')
<head>
    {!!Html::style('css/admin.css')!!}
    {!!Html::style('css/usuario.css')!!}
    {!!Html::style('css/createUsuario.css')!!}
    {!!Html::style('css/menu.css')!!}
</head>

<div margin-top:100px;>
    <body>
    <div class="background"></div>
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

<table class="table-fill" style="margin: 0 auto; float:left">

<thead>
    <tr>
    <th class="text-left">Id usuario</th>
    <th class="text-left">Dni</th>
    <th class="text-left">Nombre</th>
    <th class="text-left">Apellidos</th>
    <th class="text-left">Email</th>
    <th class="text-left">Edad</th>
    <th class="text-left">Direccion</th>
    <th class="text-left">Tipo</th>
    <th class="text-left">Username</th>
    <th class="text-left">Password</th>
    <th class="text-left">Operacion</th>
    </tr>
</thead>

    @foreach ($users as $user)

        <tbody class="table-hover">
        <tr>
        <td class="text-left">{{$user->id}}</td>
        <td class="text-left">{{$user->dni}}</td>
        <td class="text-left">{{$user->name}}</td>
        <td class="text-left">{{$user->apellidos}}</td>
        <td class="text-left">{{$user->email}}</td>
        <td class="text-left">{{$user->edad}}</td>
        <td class="text-left">{{$user->direccion}}</td>
        <td class="text-left">{{$user->tipo}}</td>
        <td class="text-left">{{$user->username}}</td>
        <td class="text-left">{{$user->password}}</td>
        <td>
            <form action="{{ route('usuario.destroy', $user->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-link">Eliminar</button>
            </form>
        </td>
        </tr>
        </tbody>

    @endforeach

</table>
            
            <div class="clear-fix"></div>
            </div>
            
            </div>
        </div>
        <div class="clear-fix"></div>
        </div>
    </div>
    </body>
</div>