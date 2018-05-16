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
            <div class="item selected">
                <a href="{{ route('usuario.edit', Auth::user()->email ) }}">    
                    MODIFICAR DATOS
                </a>
            </div>
            <div class="seperator"></div>
            <div class="item">
                <a>    
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
            {!!Form::open(['route' => ['usuario.update', Auth::user()->id],'method' => 'PUT'])!!}

    
                <div class="Registro">

                <span class="fontawesome-user"></span>
                {!!Form::text('name',Auth::user()->name,['placeholder' => 'Nombre'])!!}

                <span class="fontawesome-user"></span>
                {!!Form::text('apellidos',Auth::user()->apellidos,['placeholder' => 'Apellidos'])!!}

                <span class="fontawesome-user"></span>
                {!!Form::text('email',Auth::user()->email,['placeholder' => 'Email'])!!}

                <span class="fontawesome-user"></span>
                {!!Form::text('edad',Auth::user()->edad,['placeholder' => 'Edad'])!!}

                <span class="fontawesome-user"></span>
                {!!Form::text('direccion',Auth::user()->direccion,['placeholder' => 'Direccion'])!!}

                <span class="fontawesome-user"></span>
                {!!Form::text('username',Auth::user()->username,['placeholder' => 'Username'])!!}

                {!!Form::submit('Modificar')!!}

                {!!Form::close()!!}
            
            <div class="clear-fix"></div>
            </div>
            <div class="min-seperator"></div>
            
            
                <div class="change">CHANGE</div>
                <div class="clear-fix"></div>
                </div>
                <div class="clear-fix"></div>
            </div>
            </div>
        </div>
        <div class="clear-fix"></div>
        </div>
    </div>
    </body>
</div>