@extends('layout')

@section('title', "Reserva {{$book->idReservation}}")

@section('content')
    <div class="container">
    <h2>Usuario {{$book->idReservation}}</h2>

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
    <form method="POST" action="#">
    <fieldset disabled style="border:none;">
    {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label for="idClient">Cliente</label>
                    <input type="text" class="form-control" id="idClient" name="idClient" value="{{ $book->user->name }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label for="idTable">Mesa</label>
                    <input type="table" class="form-control" id="idTable" name="idTable" value="{{ $book->idTable }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="datetime-local" class="form-control" id="date" name="date" value="{{ $book->date }}" required>
                </div>
            </div>
        </div>

        </fieldset>
    </form>

    <p>
        <a href="{{ route('bookings.index') }} " class="btn btn-outline-primary">Regresar al listado de reservas</a>
    </p>
    </div>    
@endsection