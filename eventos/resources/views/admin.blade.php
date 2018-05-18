<!DOCTYPE html>
@extends('layouts.master')


<link href="css/admin.css" rel="stylesheet" type="text/css">

<div class="container" margin-top:100px;>
    <body>
    <div class="background"></div>
    <div class="body-wrapper container">
        <div class="panel">
        <div class="aside">
            <div class="avatar"><img src="https://66.media.tumblr.com/avatar_faa95867d2b3_128.png"/></div>
            <div class="seperator"></div>
            <div class="list">
            <div class="item selected">
                <a href="{{ route('admin') }}">
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
            <div class="main-title">BIENVENIDO {{ Auth::user()->name }}</div>
            <div class="seperator"></div>
            
            
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