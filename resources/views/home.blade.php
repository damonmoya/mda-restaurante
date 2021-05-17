@extends('layout')

@section('title', "Homepage")

@section('content')
    <div class="w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/images/slide-4.jpg" alt="First slide" width=300 height=771>
          <div class="carousel-caption d-md-block">
            <h5 class="carousel-imgDesc">Dirección: Centro Comercial Las Ramblas, 11, 35008, Las Palmas de Gran Canaria, Gran Canaria.<br>Número de teléfono: 928202122 / Móvil: 654321098</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/slide-5.jpg" alt="Second slide" width=300 height=771>
          <div class="carousel-caption d-md-block">
            <h5 class="carousel-imgDesc">El horario podría cambiar:<br>De lunes a domingo de: 12:00 a 16:00  y de 20:00 a 00:00</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/slide-6.jpg" alt="Third slide" width=300 height=771>
          <div class="carousel-caption d-md-block">
            <h5 class="carousel-imgDesc">Salud y seguridad:<br>Medidas que se aplican en este sitio:</br>Es obligatorio reservar.<br>El personal debe desinfectar las superficies entre clientes.</br>Fuente: Información proporcionada por la empresa y sugerencias de clientes.</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
    
@endsection