@extends('layout')

@section('title', "Ratings")

@section('content')
    <div class="container">
    <h1 class="mb-3">Ratings</h1>
    <a href="{{ route('ratings.create') }}" class="btn btn-primary">Nuevo rating</a>

    @if ($ratings->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
                <div class="form-group mt-2 mt-md-0 mb-3 row">
                    
                </div>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ratings as $rating)
            <tr>
                <th scope="row">{{ $rating->idRating }}</th>
                <td>{{ $rating->rating }} estrellas</td>
                <td>{{ $rating->comment }}</td>
                <td>
                    <form action="{{ route('ratings.destroy', [$rating->idRating]) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"><span class="oi oi-trash"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mb-5">
            {{ $ratings->links() }}
        </div>
    @else
        <p>No hay ratings</p>
    @endif
    </div>
@endsection