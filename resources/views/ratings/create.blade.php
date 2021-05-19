@extends('layout')

@section('title', "Crear nuevo rating")

@section('content')
    <div class="container">
    <h2>Crear nuevo rating</h2>

    {{--Sección de errores--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <h5>Error en la creación del rating:</h5>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--Sección de formulario--}}
    <form method="POST" action="{{ route('ratings.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                <input type="hidden" class="form-control" id="idClient" name="idClient" value="{{ $idClient }}">
                    <fieldset class="rating">
                        <legend>¡Puntúanos!</legend>
                        <input type="radio" id="star5" name="rating" value="5"/><label for="star5" title="Rocks!">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4"/><label for="star4" title="Pretty good">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" checked/><label for="star3" title="Meh">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2"/><label for="star2" title="Kinda bad">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1"/><label for="star1" title="Sucks big time">1 star</label>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="comment">Comentario</label>
                    <textarea type="text" class="form-control" id="comment" name="comment" maxlength=500>{{ old('comment') }}</textarea>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
        <a href="{{ route('ratings.index') }} " class="btn btn-outline-danger">Regresar al listado de ratings</a>
    </div>    
@endsection