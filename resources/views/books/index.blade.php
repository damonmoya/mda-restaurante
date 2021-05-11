@extends('layout')

@section('title', "Mis reservas")

@section('content')
  <div class="container">
    <h1 class="mb-3">Mis reservas</h1>

    @if ($books->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
                <div class="form-group mt-2 mt-md-0 mb-3 row">
                    <div class="col-10">  
                        <a href="{{ route('books.create') }}" class="btn btn-primary">Nueva reserva</a>
                    </div>
                </div>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre cliente</th>
                    <th scope="col">Nº mesa</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->idReservation }}</th>
                <td>{{ $book->idClient }}</td>
                <td>{{ $book->idTable }}</td>
                <td>{{ $book->date }}</td>
                <td>
                    <form action="{{ route('books.destroy', [$book->idReservation]) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <a href="{{ route('books.show', [$book->idReservation]) }}" class="btn btn-info"><span class="oi oi-eye"></span></a> 
                        <button type="submit" class="btn btn-danger"><span class="oi oi-trash"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No tienes ninguna reserva</p>
    @endif
    </div>
@endsection