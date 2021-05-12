<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title') - Il Gusto Di Roma</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" integrity="sha512-CdBAHV63xsk13rW8Wd6u6S1SqfW6TXXE/2HvYpeiCaQSJhEuathtzO87zloBMqQKW7JoqTixSvWlm6aj4722WQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark bg-success">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('/logos/logo_2.png') }}" alt="logo" height="80" width="380"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active text-nowrap">
              <a class="nav-link" href="{{ route('home') }}">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active text-nowrap">
              <a class="nav-link" href="{{ route('menu') }}">Carta del restaurante<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active text-nowrap">
              <a class="nav-link" href="{{ route('home') }}">Pedir a domicilio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active text-nowrap">
              <a class="nav-link" href="{{ route('bookings.index') }}">Reservas<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active text-nowrap">
              <a class="nav-link" href="{{ route('home') }}">Contacto<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active text-nowrap">
              <a class="nav-link" href="{{ route('users.index') }}">Usuarios<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active text-nowrap">
              <a class="nav-link" href="{{ route('dishes.index') }}">Platos<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3">
        <ul class="navbar-nav ml-auto">

          @if (auth()->check())
          <?php
            $user = auth()->user();
          ?>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.show', $user->id) }}">{{ $user->name }} {{ $user->surname }}</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="{{ route('logout') }}">Cerrar sesión</a>
            </li>
          @else
            <li class="nav-item">
              <a href="{{ route('register_form') }}" class="btn btn-danger">Registrarse</a>
              <a class="btn btn-danger" href="{{ route('login_form') }}">Iniciar sesión</a>
            </li>
          @endif  
        </ul>
    </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main">

      <div class="title">
        @yield('header')
      </div>
      @yield('content')
    </main>

    <footer class="footer bg-success footer-dark text-white">
      <div class="container text-center">
        <span class="footer-text">Il Gusto Di Roma 2021</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>