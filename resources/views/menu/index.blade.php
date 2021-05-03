@extends('layout')

@section('title', "Nuestra carta")

@section('content')
    <div class="container">
    <h3>Entrantes</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($entrantes as $entrante)
            <div class="col">
                <div class="card">
                <img src="{{ $entrante->image }}" class="card-img-top" alt="no hay imagen">
                <div class="card-body">
                    <h5 class="card-title">{{ $entrante->name }}</h5>
                    <p class="card-text">{{ $entrante->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    <h3>Pizzas</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($pizzas as $pizza)
            <div class="col">
                <div class="card">
                <img src="{{ $pizza->image }}" class="card-img-top" alt="no hay imagen">
                <div class="card-body">
                    <h5 class="card-title">{{ $pizza->name }}</h5>
                    <p class="card-text">{{ $pizza->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Arroces</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($arroces as $arroz)
            <div class="col">
                <div class="card">
                <img src="{{ $arroz->image }}" class="card-img-top" alt="no hay imagen">
                <div class="card-body">
                    <h5 class="card-title">{{ $arroz->name }}</h5>
                    <p class="card-text">{{ $arroz->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Ensaladas</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($ensaladas as $ensalada)
            <div class="col">
                <div class="card">
                <img src="{{ $ensalada->image }}" class="card-img-top" alt="no hay imagen">
                <div class="card-body">
                    <h5 class="card-title">{{ $ensalada->name }}</h5>
                    <p class="card-text">{{ $ensalada->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Pastas</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($pastas as $pasta)
            <div class="col">
                <div class="card">
                <img src="{{ $pasta->image }}" class="card-img-top" alt="no hay imagen">
                <div class="card-body">
                    <h5 class="card-title">{{ $pasta->name }}</h5>
                    <p class="card-text">{{ $pasta->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Postres</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($postres as $postre)
            <div class="col">
                <div class="card">
                <img src="{{ $postre->image }}" class="card-img-top" alt="no hay imagen">
                <div class="card-body">
                    <h5 class="card-title">{{ $postre->name }}</h5>
                    <p class="card-text">{{ $postre->ingredients }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Bebidas</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($bebidas as $bebida)
            <div class="col">
                <div class="card">
                <img src="{{ $bebida->image }}" class="card-img-top" alt="no hay imagen">
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