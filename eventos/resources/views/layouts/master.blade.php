<!DOCTYPE html>
<title>MAGREvent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="css/contacto.css" rel="stylesheet" type="text/css">
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
				<a class="nav-link" href="/#work"><i class="fa fa-image"></i> Eventos <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/#team"><i class="fa fa-user"></i> Equipo</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/#DSS"><i class="fa fa-info"></i> Info</a>
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