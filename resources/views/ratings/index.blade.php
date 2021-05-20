@extends('layout')

@section('title', "Ratings")

@section('content')
    <div class="container">
    <h1 class="mb-3">Ratings</h1>
    @if (auth()->check())
    <a href="{{ route('ratings.create') }}" class="btn btn-primary">Nuevo rating</a>
    @endif

    @hasrole('Administrator')
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
    @endhasrole  

    @if ($ratings->isNotEmpty())
    <div class="container">
    <div class="row d-flex justify-content-center my-5">
        @foreach($ratings as $rating)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <img src="/images/imagen-perfil-sin-foto.png" class="card-img-top" alt="no hay imagen">
                <div class="card-body">
                    <h5 class="card-title">{{ $rating->user->name }}</h5>
                    <p class="card-text">
                    <fieldset class="rating" disabled>
                        <input type="radio" value="5" @if ($rating->rating == "5") checked @endif/><label for="star5">5 stars</label>
                        <input type="radio" value="4" @if ($rating->rating == "4") checked @endif/><label for="star4">4 stars</label>
                        <input type="radio" value="3" @if ($rating->rating == "3") checked @endif/><label for="star3">3 stars</label>
                        <input type="radio" value="2" @if ($rating->rating == "2") checked @endif/><label for="star2">2 stars</label>
                        <input type="radio" value="1" @if ($rating->rating == "1") checked @endif/><label for="star1">1 star</label>
                    </fieldset>
                    </p><br></br>
                    <p class="card-text">{{ $rating->comment }} </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mb-5">
        {{ $ratings->links() }}
    </div>
    
    @else
        <p>No hay ratings</p>
    @endif
    </div>
@endsection