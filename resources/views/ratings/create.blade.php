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
                    <label for="rating">Rating</label>
                    <div class="center">
                        <div class="stars">
                        <input type="radio" id="one" name="rating" value="1">
                        <label for="one"></label>
                        <input type="radio" id="two" name="rating" value="2">
                        <label for="two"></label>
                        <input type="radio" id="three" name="rating" value="3">
                        <label for="three"></label>
                        <input type="radio" id="four" name="rating" value="4">
                        <label for="four"></label>
                        <input type="radio" id="five" name="rating" value="5">
                        <label for="five"></label>
                        <span class="result"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="comment">Comentario</label>
                    <textarea type="text" class="form-control" id="comment" name="comment" value="{{ old('comment') }}" maxlength=500></textarea>
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