
<head>

	<meta charset="utf-8" />
	<title>@yield('title','Default') | Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    {!!Html::style('css/createUsuario.css')!!}
    {!!Html::style('css/menu.css')!!}
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

    <section>
        @yield('content')
    </section>
</body>