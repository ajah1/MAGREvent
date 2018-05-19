@extends('layouts.master')
{!!Html::style('css/pago.css')!!}
 
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">


<!--Contacta me-->
<form action="{{route('comprarProducto')}}" enctype="multipart/form-data" method="post" class="form" role="form">
{{csrf_field()}}

	<div class="container">

	<div class="row">
		<aside class="col-sm-6">
	<article class="card">
	<div class="card-body p-5">
	<p> <img src="http://bootstrap-ecommerce.com/main/images/icons/pay-visa.png"> 
		<img src="http://bootstrap-ecommerce.com/main/images/icons/pay-mastercard.png"> 
	<img src="http://bootstrap-ecommerce.com/main/images/icons/pay-american-ex.png">
	</p>
	<p class="alert alert-success">Correcto</p>

	<form role="form">
	<div class="form-group">
	<label for="username">Nombre del titular de la tarjeta:</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-user"></i></span>
		</div>
		<input type="text" class="form-control" name="username" placeholder="" required="">
	</div> <!-- input-group.// -->
	</div> <!-- form-group.// -->

	<div class="form-group">
	<label for="cardNumber">Número de la tarjeta:</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
		</div>
		<input type="text" class="form-control" name="cardNumber" placeholder="">
	</div> <!-- input-group.// -->
	</div> <!-- form-group.// -->

	<div class="row">
		<div class="col-sm-8">
			<div class="form-group">
				<label><span class="hidden-xs">Fecha de exp.:</span> </label>
				<div class="form-inline">
					<select class="form-control" style="width:45%">
					<option>Mes</option>
					<option>01 - Janiary</option>
					<option>02 - February</option>
					<option>03 - February</option>
					</select>
					<span style="width:10%; text-align: center"> / </span>
					<select class="form-control" style="width:45%">
					<option>Año</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
				<input class="form-control" required="" type="text">
			</div> <!-- form-group.// -->
		</div>
	</div> <!-- row.// -->
	<button class="subscribe btn btn-warning btn-block" type="submit"> Confirmar  </button>
	</form>
	</div> <!-- card-body.// -->
	</article> <!-- card.// -->


		</aside> <!-- col.// -->
		</div>
		</header>
</form>

	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>