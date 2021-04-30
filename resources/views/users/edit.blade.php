@extends('layout')

@section('title', "Editar usuario")

@section('content')

    <h2>Editar usuario</h2>

    {{--Sección de errores--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <h5>Error en la creación del usuario:</h5>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--Sección de formulario--}}
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="surname">Apellidos</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="postalCode">Código postal</label>
                    <input type="text" class="form-control" id="postalCode" name="postalCode" value="{{ $user->postalCode }}" required>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label for="password">Clave (dejar vacío si no se quiere cambiar):</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirmar clave:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>

    <p>
        <a href="{{ route('users.index') }} " class="btn btn-outline-primary">Regresar a listado de usuarios</a>
    </p>

@endsection