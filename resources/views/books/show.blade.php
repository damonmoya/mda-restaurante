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
                    <label for="date">Fecha</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $book->date }}" required>
                </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                    <label for="category">Hora</label>
                    <select class="form-control" name="time" id="time" aria-label="Default select example">
                      <option value="12:00-13:00" @if ($book->time == "12:00-13:00") selected @endif>12:00-13:00</option>
                      <option value="13:00-14:00" @if ($book->time == "13:00-14:00") selected @endif>13:00-14:00</option>
                      <option value="14:00-15:00" @if ($book->time == "14:00-15:00") selected @endif>14:00-15:00</option>
                      <option value="15:00-16:00" @if ($book->time == "15:00-16:00") selected @endif>15:00-16:00</option>
                      <option value="20:00-21:00" @if ($book->time == "20:00-21:00") selected @endif>20:00-21:00</option>
                      <option value="21:00-22:00" @if ($book->time == "21:00-22:00") selected @endif>21:00-22:00</option>
                      <option value="22:00-23:00" @if ($book->time == "22:00-23:00") selected @endif>22:00-23:00</option>
                      <option value="23:00-00:00" @if ($book->time == "23:00-00:00") selected @endif>23:00-00:00</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="ingredients">Mesa para:</label>
                    <select class="form-control" name="table" id="table" aria-label="Default select example">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
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
        <a href="{{ route('dishes.index') }} " class="btn btn-outline-primary">Regresar a listado de platos</a>
    </p>
    </div>
@endsection