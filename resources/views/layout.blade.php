<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="biuro rachunkowe akcyza ostrzeszów">
    <meta name="author" content="Paweł Bzyl">
    <link rel="icon" href="{{ url('img/favicon.ico') }}">

    <title>@yield('title') | Biuro Rachunkowe AKCYZA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
	  <link rel="stylesheet" href="{{ url('css/css/bootstrap-reboot.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{ route('index') }}"><img class="logo_navbar" src="../../img/akcyza.png" alt="Logo Biur Rachunkowe AKCYZA"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">Strona Główna</a>
          </li>
      @guest
		  @else
		  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Wiadomości
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('messages.received') }}">Odebrane</a>
              <a class="dropdown-item" href="{{ route('messages.send') }}">Wysłane</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Edytuj profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">Panel Administracyjny</a>
          </li>
		  @endguest
		      <li class="nav-item">
            <a class="nav-link" href="{{ route('kontakt') }}">Kontakt</a>
          </li>
        </ul>

        <li class="form-inline my-2 my-lg-0">
        @guest
          <a class="btn btn-outline-danger my-2 my-sm-0" href="{{ route('login') }}">Logowanie</a>
        @else
			Zalogowany jako &nbsp;<a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('login') }}">{{ Auth::user()->imie }} {{ Auth::user()->nazwisko }}</a>
			&nbsp;<a class="btn btn-outline-danger my-2 my-sm-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
        @endguest
      </li>
      </div>
    </nav>



    <div class="container">
      <!-- Komunikaty Błędów -->
      @if (Session::has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
              {{ Session::get('success') }}
          </div>
      @endif

      @if ($errors->has('email'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
              {{ $errors->first('email') }}
          </div>
      @endif

      @if ($errors->has('password'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
              {{ $errors->first('password') }}
          </div>
      @endif

      <!-- Wstawiane ciało strony -->
      @yield('content')

      <hr>

      <footer>
        <p>&copy; Biuro Rachunkowe AKCYZA 2017</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="{{ url('js/angular.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
  </body>
</html>
