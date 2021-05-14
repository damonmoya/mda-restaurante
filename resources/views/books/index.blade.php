@extends('layout')

@section('title', "Reservas")

@section('content')
    <div class="container">
    <h1 class="mb-3">Reservas</h1>
    @hasrole('Administrator')
        <a href="{{ route('books.create') }}" class="btn btn-primary">Nueva reserva</a>
    @endhasrole

    @if ($books->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
                <div class="form-group mt-2 mt-md-0 mb-3 row">
                    
                </div>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->idReservation }}</th>
                <td>{{ $book->user->name }}</td>
                <td>{{ $book->idTable }}</td>
                <td>{{ date_format(date_create($book->date), 'd/m/Y') }}</td>
                <td>{{ $book->time }}</td>
                <td>
                <form action="{{ route('books.destroy', [$book->idReservation]) }}" method="POST">

                    <a href="{{ route('books.show', [$book->idReservation]) }}" class="btn btn-info"><span class="oi oi-eye"></span></a> 
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"><span class="oi oi-trash"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No hay reservas</p>
    @endif
    </div>
@endsection