@extends('layout')

@section('title', "Nuestra carta")

@section('content')
    <div class="container">
    <h3>Entrantes</h3>
    <div class="row">
        @foreach($entrantes as $entrante)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$entrante->idProduct]) }}">
                <img src="{{ $entrante->image }}" class="card-img-top" alt="no hay imagen">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $entrante->name }}</h5>
                    <p class="card-text">{{ $entrante->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    <h3>Pizzas</h3>
    <div class="row">
        @foreach($pizzas as $pizza)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
            <a href="{{ route('dishes.show', [$pizza->idProduct]) }}">
                <img src="{{ $pizza->image }}" class="card-img-top" alt="no hay imagen">
            </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $pizza->name }}</h5>
                    <p class="card-text">{{ $pizza->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Arroces</h3>
    <div class="row">
        @foreach($arroces as $arroz)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$arroz->idProduct]) }}">
                <img src="{{ $arroz->image }}" class="card-img-top" alt="no hay imagen">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $arroz->name }}</h5>
                    <p class="card-text">{{ $arroz->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Ensaladas</h3>
    <div class="row">
        @foreach($ensaladas as $ensalada)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$ensalada->idProduct]) }}">
                <img src="{{ $ensalada->image }}" class="card-img-top" alt="no hay imagen">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $ensalada->name }}</h5>
                    <p class="card-text">{{ $ensalada->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Pastas</h3>
    <div class="row">
        @foreach($pastas as $pasta)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$pasta->idProduct]) }}">
                <img src="{{ $pasta->image }}" class="card-img-top" alt="no hay imagen">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $pasta->name }}</h5>
                    <p class="card-text">{{ $pasta->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Postres</h3>
    <div class="row">
        @foreach($postres as $postre)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$postre->idProduct]) }}">
                    <img src="{{ $postre->image }}" class="card-img-top" alt="no hay imagen">
                </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $postre->name }}</h5>
                        <p class="card-text">{{ $postre->ingredients }} </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Bebidas</h3>
    <div class="row">
        @foreach($bebidas as $bebida)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$bebida->idProduct]) }}">
                <img src="{{ $bebida->image }}" class="card-img-top" alt="no hay imagen">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $bebida->name }}</h5>
                    <p class="card-text">{{ $bebida->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection