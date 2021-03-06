@extends('layouts.master')

<!--Contacta me-->
<form action="{{route('correo')}}" enctype="multipart/form-data" method="post" class="form" role="form">
	{{csrf_field()}}

	<div class="container" id="contacttitulo">
		<div class="row">
			<div class="col-sm-4">
				<h3 style="color: #D68910;">Contáctanos!</h3>
				<hr>
				<address>
				<strong>Correo para:</strong> <a href="mailto:#"> <?php echo $usuario ?></a><br><br>
				<strong>Teléfono:</strong> 900600600
				</address>
	</div>
		
	<div class="col-sm-8 contact-form">
			<div class="row">
				@if(Auth::User())
				<div class="col-xs-6 col-md-6 form-group">
					<input class="form-control" id="name" name="name" placeholder="{{Auth::User()->username}}" type="text" required autofocus />
				</div>
				<div class="col-xs-6 col-md-6 form-group">
				<input value="{{Auth::User()->email}}" class="form-control" id="email" name="email" placeholder="{{Auth::User()->email}}" required />
				</div>
				@else
				<div class="col-xs-6 col-md-6 form-group">
					<input class="form-control" id="name" name="name" placeholder="Username" type="text" required autofocus />
				</div>
				<div class="col-xs-6 col-md-6 form-group">
				<input value="Email" class="form-control" id="email" name="email" placeholder="Email" required />
				</div>
				@endif
			</div>
		<textarea class="form-control" id="message" name="message" placeholder="Mensaje" rows="5"></textarea>
		<br />
			<div class="row">
				<div class="col-xs-12 col-md-12 form-group">
					<button class="btn btn-warning pull-right" type="submit">Enviar</button>
		
			</div>
	</div>
</form>


	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
