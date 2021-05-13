@extends('layout')

@section('title', "Nuestra carta")

@section('content')
    <div class="container">
    <h1 class="mb-3">Platos</h1>
    <a href="{{ route('dishes.create') }}" class="btn btn-primary">Nuevo plato</a>

    @if ($dishes->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
                <div class="form-group mt-2 mt-md-0 mb-3 row">
                    
                </div>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ingredientes</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dishes as $dish)
            <tr>
                <th scope="row">{{ $dish->idProduct }}</th>
                <td>{{ $dish->name }}</td>
                <td>{{ $dish->category }}</td>
                <td>{{ $dish->ingredients }}</td>
                <td>{{ $dish->price }} €</td>
                <td>
                    <form action="{{ route('dishes.destroy', [$dish->idProduct]) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <a href="{{ route('dishes.show', [$dish->idProduct]) }}" class="btn btn-info"><span class="oi oi-eye"></span></a> 
                        <a href="{{ route('dishes.edit', [$dish->idProduct]) }}" class="btn btn-primary"><span class="oi oi-pencil"></span></a> 
                        <button type="submit" class="btn btn-danger"><span class="oi oi-trash"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No hay platos en la carta</p>
    @endif
    </div>
@endsection