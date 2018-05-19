@extends('layouts.master')
{!!Html::style('css/producto.css')!!}

<!--Producto-->
<div class="container">

<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="../imagenes/<?php echo $eventos[0]->imagen ?>"></a></div>
</div> 
		</aside>
		<aside class="col-sm-7">
		
<article class="card-body p-5">

	<h3 class="title mb-3"><?php echo $eventos[0]->nombre ?> </h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		<span class="num">Fecha Inicio: <?php echo $eventos[0]->fecha_inicio ?></span>
		<br><span class="num">Fecha Fin: <?php echo $eventos[0]->fecha_fin ?></span>
	</span> 
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Descripción</dt>
  <dd><p><?php echo $eventos[0]->descripcion ?></p></dd>
</dl>
<dl class="param param-feature">
  <dt>#Código#</dt>
  <dd><?php echo $eventos[0]->id ?></dd>
</dl>  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Cantidad: </dt>
			  <dd>
				{!!Form::select('Cantidad',['1' => '1','2' => '2', '3' => '3', '4' => '4', '5' => '5'], null,['placeholder' => 'Selecciona'])!!}
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		<div class="col-sm-7">
			<dl class="param param-inline">
				  <dt>Tipo: </dt>
				  <dd>
					@foreach ($eventos as $evento)
					
				  	<label class="form-check form-check-inline" id="precio">
					  <input class="form-check-input" id="tipo" method="POST" type="radio" name="inlineRadioOptions" value="option2">
					  <span class="form-check-label">{{$evento->tipo_entrada}} - {{$evento->precio}} €</span>
					</label>
					@endforeach
				  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	<hr>
	<a href="{{ route('comprar', $eventos[0]->id) }}" class="btn btn-lg btn-warning text-uppercase"> <i class="fa fa-credit-card"></i> Comprar </a>
	</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
