<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Biuro Rachunkowe AKCYZA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/bootstrap-reboot.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../../css/custom.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><img class="logo_navbar" src="../../img/akcyza.png" alt="Logo Biur Rachunkowe AKCYZA"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Strona Główna</a>
          </li>
          @guest
		  @else
		  <li class="nav-item">
            <a class="nav-link" href="#">Wiadomości</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Edytuj profil</a>
          </li>
		  @endguest
		  <li class="nav-item">
            <a class="nav-link" href="#">Kontakt</a>
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
      <!-- Example row of columns -->
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
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
