@extends('layout')

@section('title', "Editar nuevo plato")

@section('content')
    <div class="container">
    <h2>Editar nuevo plato</h2>

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
    <form method="POST" action="{{ route('dishes.update', $dish->idProduct) }}">
    {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="category">Categoría</label>
                    <select class="form-control" name="category" id="category" aria-label="Default select example">
                      <option value="Entrantes" @if ($dish->category == "Entrantes") selected @endif >Entrantes</option>
                      <option value="Pizzas" @if ($dish->category == "Pizzas") selected @endif >Pizzas</option>
                      <option value="Arroces" @if ($dish->category == "Arroces") selected @endif >Arroces</option>
                      <option value="Ensaladas" @if ($dish->category == "Ensaladas") selected @endif >Ensaladas</option>
                      <option value="Pastas" @if ($dish->category == "Pastas") selected @endif >Pastas</option>
                      <option value="Postres" @if ($dish->category == "Postres") selected @endif >Postres</option>
                      <option value="Bebidas" @if ($dish->category == "Bebidas") selected @endif >Bebidas</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="ingredients">Ingredientes</label>
                    <input type="text" class="form-control" id="ingredients" name="ingredients" value="{{ $dish->ingredients }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.1" min="1" class="form-control" id="price" name="price" value="{{ $dish->price }}" required>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="image">Imagen</label>
                    <input type="file" class="form-control" id="file"  onchange="getBaseUrl()" accept=".png, .jpg, .jpeg">
                    <img src="{{$dish->image}}" class="img-fluid">
                    <input type="hidden" id="image" name="image" value="{{$dish->image}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
          <a href="{{ route('dishes.index') }} " class="btn btn-outline-primary">Regresar a listado de platos</a>
        </div>
    </form>
    </div>
@endsection

<script>
  function getBaseUrl ()  {
    var image = document.querySelector('#image64')
    var file = document.querySelector('input[type=file]')['files'][0];
    var reader = new FileReader();
    var baseString;
    reader.onloadend = function () {
        baseString = reader.result;
        document.getElementById("image").value = baseString;
    };
    reader.readAsDataURL(file);
}
</script>