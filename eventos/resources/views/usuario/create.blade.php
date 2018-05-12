
<header>

    <link href="{{asset('css/create.css')}}" rel="stylesheet">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">

</header>

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
    <form class="form" action="{{route('registrar')}}" method="post">

     {{csrf_field()}}

        <h1>Usuario</h1>
        <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">
 
        <input type="text" name="dni" placeholder="Dni" />
        <input type="text" name="name" placeholder="Nombre" />
        <input type="text" name="apellidos" placeholder="Apellidos" />
        <input type="email" name="email" placeholder="Correo" />
        <input type="text" name="edad" placeholder="Edad" />
        <input type="text" name="direccion" placeholder="Direccion" />

        <select name="tipo">
        <option value="" selected>Seleccionar tipo</option>
        <option value="A">Administrador</option>
        <option value="U">Usuario</option>
        </select>

        <input type="text" name="username" placeholder="Nombre Usuario" />
        <input type="password" name="password" placeholder="Password" />
        <input class=""type="submit" value="Registrarse" />

    </form>

</body>
