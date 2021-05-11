@extends('layout')

@section('title', "Nueva reserva")

@section('content')
<div class="container">
  <h1>Booking</h1>
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
    <form method="POST" action="{{ route('books.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="date">Fecha:</label>
                    <input type="date" class="form-control" id="date" name="date" min="" max="" value="{{ old('date') }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="time" class="form-label">Hora:</label>
                    <select class="form-control" name="time" id="time" aria-label="Default select example">
                      <option value="18:00-19:00" selected>18:00-19:00</option>
                      <option value="19:00-20:00">19:00-20:00</option>
                      <option value="20:00-21:00">20:00-21:00</option>
                      <option value="21:00-22:00">21:00-22:00</option>
                      <option value="22:00-23:00">22:00-23:00</option>
                      <option value="23:00-00:00">23:00-00:00</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="table">Mesa para:</label>
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
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
            <a href="{{ route('home') }} " class="btn btn-outline-primary">Canselar</a>
        </div>
    </form>
    </div>
</div>
  
@endsection