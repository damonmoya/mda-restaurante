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
                    <input type="date" class="form-control" id="date" name="date" min="" max="" onchange="getFreeDays()" value="{{ old('date') }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="table">Mesa para:</label>
                    <select class="form-control" name="table" id="table"  onchange="getFreeTables()" aria-label="Default select example">
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
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
            <a href="{{ route('home') }} " class="btn btn-outline-primary">Canselar</a>
        </div>
    </form>
    </div>
</div>
  
@endsection

@section('scripts')
<script>
    var date = new Date();
    var dd = date.getDate();
    var mm = date.getMonth()+1; //January is 0!
    var yyyy = date.getFullYear();
    var today = yyyy+'-'+mm+'-'+dd; 
    if (mm < 10) {
        var today = yyyy+'-'+0mm+'-'+dd; 
    } 

    console.log(date.toS);
    document.getElementById('date').setAttribute('min', '2021-05-13')
    function getFreeDays() {
        var date = document.getElementById('date').value
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var res = JSON.parse(this.responseText)
                var time = document.getElementById('time')
                while (time.firstChild) {
                    time.removeChild(time.firstChild);
                }
                for (const key in res) {
                    var option = '<option value="' + res[key] + '">' + res[key] + '</option>';
                    $('#time').append(option);
                }
            }
        };
        ajax.open("get", "/getBooks/" + date, true);
        ajax.setRequestHeader("Content-Type","application/json;charset=UTF-8");
        ajax.send();

        // $.ajax({
        //     type: 'GET',
        //     url: '/getBooks/' + date,
        //     success: function(res) {
        //         console.log('bien: ' + res)
        //         var select = document.createElement('select')
        //         $.each(JSON.parse(res), function (i, element) {
        //             console.log(element);
        //             var option = '<option value="' + element + '">"' + element + '"</option>';
        //             $('#time').append(option);
        //         });
        //         document.getElementById('time').firstChild().setAttribute('select');
        //     },
        //     fail: function(res) {
        //         console.log('mal: ' + res)

        //     }
        // });
    }

    function getFreeTables() {
        
    }

</script>
@endsection