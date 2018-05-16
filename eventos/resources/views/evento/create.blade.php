<!DOCTYPE html>
@extends('layouts.master')
<head>
    {!!Html::style('css/admin.css')!!}
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
            <div class="item  selected">
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
            <div class="item">
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
            <div class="main-title">CREAR NUEVO EVENTO</div>
            <div class="seperator"></div>
            <form action="{{route('newEvent')}}" enctype="multipart/form-data" method="post">
             {{csrf_field()}}

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
            
            
            <div class="clear-fix"></div>
            </div>
            
            </div>
        </div>
        <div class="clear-fix"></div>
        </div>
    </div>
    </body>
</div>
