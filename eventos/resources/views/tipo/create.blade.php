@extends('layouts.crear')

<header>
    <link href="{{asset('css/create.css')}}" rel="stylesheet">
</header>


<body>
    @section('content')
        
        @include('alerts.request')
        
        {!!Form::open(['route' => 'tipo.store', 'method' => 'POST'])!!}
        <h1> Tipo de entrada</h1>
            <form method="post" action="https://getform.org/f/70415a77-d632-4883-bf07-2e15d3f557da">

            {!!Form::text('tipo_entrada',null,['placeholder' => 'Tipo entrada'])!!}
            {!!Form::text('precio',null,['placeholder' => 'Precio'])!!}
            {!!Form::submit('Registrar')!!}

        {!!Form::close()!!}
 
    @endsection
</body> 