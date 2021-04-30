@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <h1>Usuario #{{ $user->id }}</h1>

    <p><strong>Nombre completo:</strong> {{ $user->name }} {{ $user->surname }}</p>
    <p><strong>Correo:</strong> {{ $user->email }}</p>
    <p><strong>Teléfono:</strong> {{ $user->phone }}</p>
    <p><strong>Dirección:</strong> {{ $user->address }}</p>
    <p><strong>Cód. Postal:</strong> {{ $user->postalCode }}</p>

    <p>
        <a href="{{ route('users.index') }} " class="btn btn-outline-primary">Regresar a listado de usuarios</a>
    </p>

@endsection