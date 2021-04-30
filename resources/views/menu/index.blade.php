@extends('layout')

@section('title', "Nuestra carta")

@section('content')
    <div class="container">
    <h3>Entrantes</h3>
    @foreach($dishes as $dish)
    @if($dish->category=="Entrantes")
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                <img src="{{ $dish->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $dish->name }}</h5>
                    <p class="card-text">{{ $dish->ingredients }} </p>
                </div>
                </div>
            </div>
        </div>
    @endif    
    @endforeach
    <h3>Pizzas</h3>
    @foreach($dishes as $dish)
    @if($dish->category=="Pizzas")
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                <img src="{{ $dish->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
        </div>
    @endif
    @endforeach

    <h3>Arroces</h3>
    @foreach($dishes as $dish)
    @if($dish->category=="Arroces")
    
    @endif
    @endforeach

    <h3>Ensaladas</h3>
    @foreach($dishes as $dish)
    @if($dish->category=="Ensaladas")
    
    @endif
    @endforeach

    <h3>Pastas</h3>
    @foreach($dishes as $dish)
    @if($dish->category=="Pastas")
    
    @endif
    @endforeach

    <h3>Postres</h3>
    @foreach($dishes as $dish)
    @if($dish->category=="Postres")
    
    @endif
    @endforeach

    <h3>Bebidas</h3>
    @foreach($dishes as $dish)
    @if($dish->category=="Bebidas")
    
    @endif
    @endforeach
    </div>
@endsection