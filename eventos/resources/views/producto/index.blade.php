@extends('layouts.master')
{!!Html::style('css/producto.css')!!}

<!--Producto-->
@foreach($eventos as $evento)
<div class="container">

<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="img/busta.jpg"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">

  <div class="item-gallery"> <img src="img/m5.jpg" class="img-fluid"> </div>
  <div class="item-gallery"> <img src="img/sabina.jpg" class="img-fluid"> </div>
  <div class="item-gallery"> <img src="img/viña.jpg" class="img-fluid"> </div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-7">
		
<article class="card-body p-5">

	<h3 class="title mb-3">{{$valor}}</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		<span class="num">Precio: 60</span><span class="currency">€</span>
	</span> 
	<span>/por persona</span> 
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Descripción</dt>
  <dd><p>"Vivir", una balada romántica compuesta por los compositores españoles Rafa Vergara y Pablo Manresa junto a la compositora colombiana Vicky Echeverri</p></dd>
</dl>
<dl class="param param-feature">
  <dt>#Código#</dt>
  <dd>12345611</dd>
</dl>  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Cantidad: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		<div class="col-sm-7">
			<dl class="param param-inline">
				  <dt>Tipo: </dt>
				  <dd>
				  	<label class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <span class="form-check-label">N</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <span class="form-check-label">T</span>
					</label>
					<label class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <span class="form-check-label">P</span>
					</label>
				  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	<hr>
	<a href="{{ route('comprar') }}" class="btn btn-lg btn-warning text-uppercase"> <i class="fa fa-credit-card"></i> Comprar </a>
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
