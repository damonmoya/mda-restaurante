@extends('layout')

@section('title', "Ver plato")

@section('content')
    <div class="container">
    <h2>Ver reserva</h2>

    {{--Sección de formulario--}}
    <form method="POST" action="#">
    <fieldset disabled style="border:none;">
    {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" class="form-control" id="user" name="user" value="{{ $user->name }} {{$user->surname}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="table">Mesa para:</label>
                    <input type="text" class="form-control" id="table" name="table" value="{{$capacity}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $book->date }}">
                </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                    <label for="time">Hora</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{ $book->time }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="comments">Comentario (opcional)</label>
                    <textarea type="text" class="form-control" id="comments" name="comments" rows="5" value="{{ old('comments') }}" maxlength=500></textarea>
                </div>
            </div>
        </div>
      </fieldset>
    </form>
    <p>
        @hasrole('Administrator')
            <a href="{{ route('books.index') }} " class="btn btn-outline-primary">Regresar a listado de reservas</a>
        @else
            <a href="{{ route('books.index') }} " class="btn btn-outline-primary">Regresar a mis reservas</a>
        @endhasrole
    </p>
    </div>
@endsection