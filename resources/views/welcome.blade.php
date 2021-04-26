@extends('layout')

@section('title', "Página principal")

@section('content')
  <div class="row">
    <div class="col">
      <h1>Página principal</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">

    @if (auth()->check())
        <?php
          $user = auth()->user();
        ?>
        <h3>¡Saludos, {{ $user->name }}!</h3>
      @else
        <h3>¡Bienvenido, visitante!</h3>
        <a href="{{ route('login_form') }}" class="btn btn-primary">Iniciar sesión</a>
        <a href="{{ route('register_form') }}" class="btn btn-info">Registrarse</a>
      @endif

    </div>
  </div>
@endsection