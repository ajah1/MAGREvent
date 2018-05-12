@extends('layouts.master')

@section('title')
    Listado Usuarios
@endsection

@section('content')

<link rel="stylesheet" type="text/css" href="css/usuario.css">

<div class="table-title">
<h3>Tabla Usuarios</h3>

{!!Form::open(['route' => ['buscarUsuario'],'method' => 'POST'])!!}
</div>

    {!!Form::select('tipo',['id' => 'Id','dni' => 'Dni','name' => 'Nombre',
    'apellidos' => 'Apellidos','email' => 'Email','edad' => 'Edad','direccion' => 'Direccion',
    'tipo' => 'Tipo','username' => 'Username'], null,['placeholder' => 'Filtro'])!!}

    <input type="search" name="buscar" id="buscar" method="POST">

    {!!Form::select('orden',['asc' => 'Ascendentemente','desc' => 'Descendentemente'], null,['placeholder' => 'Orden'])!!}

<button class="menus">
    <a href="{{ route('buscarUsuario') }}">Buscar<span aria-hidden="true"></span></a>
</button>
{!!Form::close()!!}

<table class="table-fill">

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
            <a href="{{ route('usuario.edit', $user->id) }}" class="btn btn-warning">Editar<span aria-hidden="true"></span></a>

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

<div class="paguinacion"
    {!!$users->render()!!}
</div>

@endsection


