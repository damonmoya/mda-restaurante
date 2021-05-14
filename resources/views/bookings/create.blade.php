@extends('layout')

@section('title', "Crear nueva reserva")

@section('content')
    <div class="container">
    <h2>Crear nueva reserva</h2>

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
    <form method="POST" action="{{ route('books.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="idClient">Nombre</label>
                    <select name="idClient" id="idClient" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="idTable">Mesa</label>
                    <select name="idTable" id="idTable" class="form-control">
                        @foreach($mesas as $mesa)
                            <option value="{{ $mesa->idTable }}">Mesa {{ $mesa->idTable }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="date">Hora:</label>
            <input type="datetime-local" class="form-control" id="date" name="date" required>
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