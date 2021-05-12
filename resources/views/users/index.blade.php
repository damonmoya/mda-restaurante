@extends('layout')

@section('title', "Usuarios")

@section('content')
    <div class="container">
    <h1 class="mb-3">Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo usuario</a>

    @if ($users->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
                <div class="form-group mt-2 mt-md-0 mb-3 row">
                    
                </div>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('users.destroy', [$user->id]) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <a href="{{ route('users.show', [$user->id]) }}" class="btn btn-info"><span class="oi oi-eye"></span></a> 
                        <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-primary"><span class="oi oi-pencil"></span></a> 
                        <button type="submit" class="btn btn-danger"><span class="oi oi-trash"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No hay usuarios registrados</p>
    @endif
    </div>
@endsection