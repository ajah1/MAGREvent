
<title>MAGREvent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="css/proyecto.css" rel="stylesheet" type="text/css">
 <link href="css/cssgrande.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark fixed-top" style="background-color: #D68910;">
	<a class="navbar-brand" href="/">MAGREVent</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#work"><i class="fa fa-image"></i> Eventos <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#team"><i class="fa fa-user"></i> Equipo</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#DSS"><i class="fa fa-info"></i> Info</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Buscar">
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
		</form>
		<ul class="navbar-nav mr-right">
			
			<li class="nav-item active">
				<!--a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"> Sign out</i></a-->
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"> Sign in</i></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu">
                      <li>
                        <div>
                       
                          <a href="{{ route('home') }}">
                              Ver Perfil
                          </a>
                          </div>

                          <div>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                              Logout
                          </a>
                          </div>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endguest
      </ul>
			</li>
		</ul>
	</div>
</nav>
<!--End Nav -->

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">MAGREvent</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">MAGREvent</span><br>
    <span class="w3-large">Vive tu experiencia con nosotros.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Conocenos</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-instagram w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-snapchat w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-twitter w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-linkedin w3-hover-opacity" style="color: #D68910;"></i>
  </div>
</header>

<!-- EVENTO -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h1 class="w3-center" style="color: #D68910;">EVENTOS</h1>
  <p class="w3-center w3-large" style="color: #D68910;">A QUE EVENTO TE GUSTARÍA ASISTIR?</p>

  <div class="w3-row-padding" style="margin-top:50px">
    
  @foreach ($eventos as $evento)

    <div class="w3-col l3 m6">
      <ul class="listing">
		  <li class="product">
			<a class="img-wrapper" href="#">
			  <img src="imagenes/{{$evento->imagen}}" class="img-fluid" alt="Green running shoe" />
			</a>
			<div class="note no-stock">{{$evento->id}}</div>
			
			<div class="info">
			  <div class="title">{{$evento->nombre}}</div>
			  <div class="price">{{$evento->fecha_inicio}}</div>
			</div>
			
			<div class="actions-wrapper">
			  <a href="{{ route('verProducto', $evento->id) }}" class="add-btn wishlist" >Ver</a>
			  <a href="{{ route('comprar', $evento->id) }}" class="add-btn cart">Comprar</a>
			</div>
		</li>
		</ul>
    </div>
    @endforeach
  </div>
  </div>

  

<!-- EQUIPO -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="team">
  <h1 class="w3-center" style="color: #D68910;">EQUIPO</h1>
  <p class="w3-center w3-large" style="color: #D68910;">LOS QUE DIRIGEN MAGREvent</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team3.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Álvaro Gironés García</h3>
          <p class="w3-opacity">Diseñador Web</p>
          <p>gg52@alu.ua.es</p>
          <p>
          <a href="{{ route('contactanosA') }}" class="w3-button w3-yellow w3-block"><i class="fa fa-envelope"></i> Contactar</a></p>
          </p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team3.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Javier Monllor Alcaraz</h3>
          <p class="w3-opacity">Programador</p>
          <p>jma86@alu.ua.es</p>
          <p>
          <a href="{{ route('contactanosJ') }}" class="w3-button w3-yellow w3-block"><i class="fa fa-envelope"></i> Contactar</a>
          </p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Alejandro Aliaga Hyder</h3>
          <p class="w3-opacity">Diseñador Web</p>
          <p>Descripción.</p>
          <p>
          <a href="{{ route('contactanosAl') }}" class="w3-button w3-yellow w3-block"><i class="fa fa-envelope"></i> Contactar</a>
          </p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team3.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Juan Ruiz de Larrea Aracil</h3>
          <p class="w3-opacity">Programador</p>
          <p>jrl12@alu.ua.es</p>
          <p>
          <a href="{{ route('contactanosJu') }}" class="w3-button w3-yellow w3-block"><i class="fa fa-envelope"></i> Contactar</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- About Section 
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">EQUIPO</h3>
  <p class="w3-center w3-large">Gracias por confiar en nosotros</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter"> 
		<div id="github_logo1" class="logo"><a href="https://github.com/appijumbo"><p>Álvaro Gironés</p></a></div>
	</div>
    <div class="w3-quarter"> 
		<div id="github_logo2" class="logo"><a href="https://github.com/appijumbo"><p>Javier Monllor</p></a></div>
	</div>
    <div class="w3-quarter"> 
		<div id="github_logo3" class="logo"><a href="https://github.com/appijumbo"><p>Alejandro Aliaga</p></a></div>
	</div>
    <div class="w3-quarter"> 
		<div id="github_logo4" class="logo"><a href="https://github.com/appijumbo"><p>Juan Ruiz</p></a></div>
	</div>
  </div>
</div>-->

<!-- Promo Section - "We know design" -->
<div class="w3-container" style="padding:128px 16px" id="DSS">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h1 style="color: #D68910;">DSS.</h1>
      <h3 style="color: #D68910;">Universidad de Alicante, Ingeniería Informática </h3>
	  <p>El desarrollo y mantenimiento de un sistema de software implica tomar decisiones de planificación, diseño, 
	  implementación e implantación a lo largo de todo el ciclo de vida del producto software. Para ayudarnos en estas actividades, existen distintas metodologías, 
	  cada una con artefactos y técnicas particulares, que resultan más o menos adecuadas según el contexto de uso.

En esta asignatura se proporcionará al alumno una visión general de distintas aproximaciones de desarrollo software, 
desde las metodologías ágiles al desarrollo dirigido por modelos. Además, también se profundizará en las técnicas de modelado de software vistas en asignaturas anteriores, 
poniendo especial énfasis en la creación de diseños robustos y flexibles mediante la elección de una buena arquitectura y la aplicación de patrones de diseño..</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <div id="map"></div>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    </div>
  </div>
</div>


<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter" >
    <span class="w3-xxlarge" style="color: #D68910;">14+</span>
    <br><p style="color: #D68910;">Álvaro Gironés</p>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge" style="color: #D68910;">55+</span>
    <br><p style="color: #D68910;">Javier Monllor</p>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge" style="color: #D68910;">89+</span>
    <br><p style="color: #D68910;">Alejandro Aliaga</p>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge" style="color: #D68910; ">150+</span>
    <br><p style="color: #D68910;">Juan Ruiz</p>
  </div>
</div>



<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h2 style="color: #D68910;">Tiempo Empleado.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-file-code-o w3-margin-right"></i>Diseño</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Implementación</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Diseño</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64" id="cont">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-instagram w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-snapchat w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-twitter w3-hover-opacity" style="color: #D68910;"></i>
    <i class="fa fa-linkedin w3-hover-opacity" style="color: #D68910;"></i>
  </div>
</footer>
<script>

		var map,
    points_data = [
      {'title': 'MAGREvent', 'pos': {lat: 38.3856636, lng: -0.5132717}},
      {'title': '05', 'pos': {lat: 35.65325, lng: 139.6935}}
    ];

function addMarker(d) {
  var infowindow_contents = "<div class='info_inner'>" + d.title + "</div>"
  var infowindow = new google.maps.InfoWindow({
    content: infowindow_contents
  });
  var marker = new google.maps.Marker({
    position: d.pos,
    map: map,
    title: d.title
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

function initialize() {
  var mapOptions = {
    zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: {lat: 38.3856636, lng: -0.5132717}
  };
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  for (var i = 0; i < points_data.length; i++) {
    addMarker(points_data[i]);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
