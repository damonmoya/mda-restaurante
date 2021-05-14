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
        <input type="hidden" value="" id="idTable" name="idTable">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="date">Fecha:</label>
                    <input type="date" class="form-control" id="date" name="date"  min="{{date('Y-m-d')}}" onchange="unlockTable()" value="{{ old('date') }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="table">Mesa para:</label>
                    <select class="form-control" name="table" id="table" onchange="getFreeDays()" aria-label="Default select example" disabled>
                      <option value="2" selected>2</option>
                      <option value="4">4</option>
                      <option value="6">6</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="time" class="form-label">Hora:</label>
                    <select class="form-control" name="time" id="time" aria-label="Default select example">
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
        var diners = document.getElementById('table').value
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var res = JSON.parse(this.responseText)
                var time = document.getElementById('time')
                var table = document.getElementById('idTable')
                if (res[1] == null){
                    document.getElementById('confirm').setAttribute('disabled', true)
                }else {
                    document.getElementById('confirm').removeAttribute('disabled')
                    table.value = res[1]
                }
                while (time.firstChild) {
                    time.removeChild(time.firstChild);
                }
                for (const key in res[0]) {
                    var option = '<option value="' + res[0][key] + '">' + res[0][key] + '</option>';
                    $('#time').append(option);
                }
            }
        };
        ajax.open("get", "/getBooks/" + date + "/" + diners, true);
        ajax.setRequestHeader("Content-Type","application/json;charset=UTF-8");
        ajax.send();
    }

    function unlockTable() {
        var date = document.getElementById('table').removeAttribute('disabled');
        getFreeDays();
    }

</script>
@endsection