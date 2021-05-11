@extends('layout')

@section('title', "Iniciar sesión")

@section('content')

    @if ( isset($message_requirelog) )
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Por favor</strong>, {{$message_requirelog}}</div>
    @endif

    <h2>Iniciar sesión</h2>

    {{--Sección de errores--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--Sección de formulario--}}
    <form method="POST" action="{{ route('login_send') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Clave:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>
    </form>

    <p>
        <a href="{{ route('home') }} " class="btn btn-outline-primary">Regresar a Home</a>
    </p>
@endsection