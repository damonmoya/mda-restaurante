@extends('layout')

@section('title', "Editar reserva")

@section('content')
    <div class="container">
    <h2>Editar reserva</h2>

    {{--Sección de errores--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <h5>Error en la creación de la reserva:</h5>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--Sección de formulario--}}
    <form method="POST" action="{{ route('books.update', $book->idReservation) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="idClient">Cliente</label>
                    <select name="idClient" id="idClient" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id== $book->idClient ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="idTable">Mesa</label>
                    <select name="idTable" id="idTable" class="form-control">
                        @foreach($mesas as $mesa)
                            <option value="{{ $mesa->idTable }}" {{ $mesa->idTable== $book->idTable ? 'selected' : '' }}>Mesa {{ $mesa->idTable }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label for="date">Hora</label>
                    <input type="datetime-local" class="form-control" id="date" name="date" value="{{ $book->date }}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>

    <p>
        <a href="{{ route('books.index') }} " class="btn btn-outline-danger">Regresar al listado de reservas</a>
    </p>
    </div>
@endsection