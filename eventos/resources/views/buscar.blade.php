
<head>
    {!!Html::style('css/usuario.css')!!}
    {!!Html::style('css/menu.css')!!}
</head>

<body>


<div class="navbar">
    <a href="/">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Crear </button>
        <div class="dropdown-content">
            <a href="/usuario/create">Usuario</a>
            <a href="/evento/create">Evento</a>
            <a href="/entrada/create">Entrada</a>
            <a href="/reserva/create">Reserva</a>
            <a href="/tipo/create">Tipo</a>
        </div> 
    </div>
    <div class="dropdown">
        <button class="dropbtn">Buscar </button>
        <div class="dropdown-content">
            <a href="/usuario">Usuario</a>
            <a href="/evento">Evento</a>
            <a href="/entrada">Entrada</a>
            <a href="/reserva">Reserva</a>
            <a href="/tipo">Tipo</a>
        </div> 
    </div>
</div>




</body>