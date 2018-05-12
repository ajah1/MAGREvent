@extends('layouts.crear')

@section('content')
@include('alerts.request')

{!!Form::open(['route' => ['tipo.update', $tipo->id],'method' => 'PUT'])!!}

{!!Form::label('Modificar tipo: Id -> ' . $tipo->id,null,['class' => 'texto'])!!}
<div class="Registro">

<span class="fontawesome-user"></span>
{!!Form::text('precio',$tipo->precio,['placeholder' => 'Precio de la entrada'])!!}

{!!Form::submit('Modificar')!!}

{!!Form::close()!!}
@endsection
