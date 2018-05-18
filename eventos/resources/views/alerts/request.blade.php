<link href="{{asset('css/createUsuario.css')}}" rel="stylesheet">

@if(count($errors) > 0)
    <div class="error-msg">

        <ul>
            @foreach($errors->all() as $error)
                <li class="fa fa-times-circle">{!!$error!!}</li>
            @endforeach
        </ul>
    </div>
@endif