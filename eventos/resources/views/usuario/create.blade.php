<!DOCTYPE html>
<html lang="es">
    <head>

    <meta charset="utf-8" />
    <title>Crear Usuario</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link href="{{asset('css/createUsuario.css')}}" rel="stylesheet">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">

    </head>

    <body>

    <div class="navbar">
        <a href="/">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Crear 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="/usuario/create">Usuario</a>
            <a href="/evento/create">Evento</a>
            <a href="/entrada/create">Entrada</a>
            <a href="/reserva/create">Reserva</a>
            <a href="/tipo/create">Tipo</a>
            </div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Buscar 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="/usuario">Usuario</a>
            <a href="/evento">Evento</a>
            <a href="/entrada">Entrada</a>
            <a href="/reserva">Reserva</a>
            <a href="/tipo">Tipo</a>
            </div> 
        </div>
    </div>

    @include('alerts.request')

    <form action="{{route('registrar')}}" method="post">

    {{csrf_field()}}

        <p class="texto">Registro Usuario</p>
        <div class="Registro">
        <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

        <span class="fontawesome-user"></span>
        <input type="text" name="dni" placeholder="Dni Usuario" />

        <span class="fontawesome-user"></span>
        <input type="text" name="name" placeholder="Nombre" />

        <span class="fontawesome-user"></span>
        <input type="text" name="apellidos" placeholder="Apellidos" />

        <span class="fontawesome-user"></span>
        <input type="text" name="email" placeholder="Correo" />

        <span class="fontawesome-user"></span>
        <input type="text" name="edad" placeholder="Edad" />

        <span class="fontawesome-user"></span>
        <input type="text" name="direccion" placeholder="Direccion" />

        <span class="fontawesome-user"></span>
        <select name="tipo">
            <option value="" selected>Seleccionar tipo</option>
            <option value="A">Administrador</option>
            <option value="U">Usuario</option>
        </select>

        <span class="fontawesome-user"></span>
        <input type="text" name="username" placeholder="Nombre Usuario" />

        <span class="fontawesome-user"></span>
        <input type="password" name="password" placeholder="Password" />

        <input type="submit" value="Registrarse" />

    </form>
    </body>

</html>
