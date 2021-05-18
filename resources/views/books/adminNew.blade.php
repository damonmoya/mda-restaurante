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
                    <label for="idClient">Nombre: </label>
                    <select name="idClient" id="idClient" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="date">Fecha:</label>
                        <input type="date" class="form-control" id="date" name="date"  min="{{date('Y-m-d')}}" max="{{date('Y-m-d', strtotime('+1 year'))}}" onchange="unlockTable()" value="{{ old('date') }}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="idTable">Mesa: </label>
                <select name="idTable" id="idTable" class="form-control" onchange="getFreeDays()" disabled>
                    @foreach($mesas as $mesa)
                        <option value="{{ $mesa->idTable }}">Mesa {{ $mesa->idTable }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="time" class="form-label">Hora:</label>
                    <select class="form-control" name="time" id="time" aria-label="Default select example">
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" id="confirm" name="confirm" class="btn btn-primary">Confirmar</button>
            <a href="{{ route('home') }} " class="btn btn-outline-danger">Cancelar</a>
        </div>
    </form>
    </div>
</div>
  
@endsection

@section('scripts')
<script>
    function getFreeDays() {
        var date = document.getElementById('date').value
        var idTable = document.getElementById('idTable').value
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var res = JSON.parse(this.responseText)
                var time = document.getElementById('time')
                var table = document.getElementById('idTable')
                if (res[0] == 'No hay horas disponibles'){
                    document.getElementById('confirm').setAttribute('disabled', true)
                }else {
                    document.getElementById('confirm').removeAttribute('disabled')
                }
                while (time.firstChild) {
                    time.removeChild(time.firstChild);
                }
                for (const key in res) {
                    var option = '<option value="' + res[key] + '">' + res[key] + '</option>';
                    $('#time').append(option);
                }
            }
        };
        ajax.open("get", "/getBooksAdmin/" + date + "/" + idTable, true);
        ajax.setRequestHeader("Content-Type","application/json;charset=UTF-8");
        ajax.send();
    }

    function unlockTable() {
        var date = document.getElementById('idTable').removeAttribute('disabled');
        getFreeDays();
    }

</script>
@endsection