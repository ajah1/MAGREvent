<!DOCTYPE html>
@extends('layouts.master')

<head>
    {!!Html::style('css/user.css')!!}
    {!!Html::style('css/createUsuario.css')!!}
    {!!Html::style('css/menu.css')!!}
</head>

<div margin-top:100px;>
    <body>
    <div class="background"></div>
    <div class="body-wrapper">
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
                <a href="{{ route('usuario.edit', Auth::user()->email ) }}">    
                    MODIFICAR DATOS
                </a>
            </div>
            <div class="seperator"></div>
            <div class="item selected">
                <a href="{{ route('listarEventos') }}">    
                    SIGUIENTES EVENTOS
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
            <div class="sub-title">PANEL DEL USUARIO</div>
            <div class="main-title">MODIFICAR DATOS PERSONALES</div>
            <div class="seperator"></div>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                    <th class="text-left">Id</th>
                    <th class="text-left">Nombre</th>
                    <th class="text-left">Fecha inicio</th>
                    <th class="text-left">Fecha fin</th>
                    </tr>
                </thead>

                    @foreach ($eventos as $evento)

                    <tbody class="table-hover">
                    <tr>
                    <td class="text-left">{{$evento->id}}</td>
                    <td class="text-left">{{$evento->nombre}}</td>
                    <td class="text-left">{{$evento->fecha_inicio}}</td>
                    <td class="text-left">{{$evento->fecha_fin}}</td>
                    </tr>
                    </tbody>
                    @endforeach
            </table>
            
            <div class="clear-fix"></div>
            </div>
            <div class="min-seperator"></div>
            </div>
            </div>
        </div>
        <div class="clear-fix"></div>
        </div>
    </div>
    </body>
</div>