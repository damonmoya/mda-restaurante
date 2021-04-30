@extends('layout')

@section('title', "Crear nuevo plato")

@section('content')

    <h2>Crear nuevo plato</h2>

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
    <form method="POST" action="{{ route('dishes.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="category" class="form-label">Categoría</label>
                    <select class="form-control" name="category" id="category" aria-label="Default select example">
                      <option value="Entrantes" selected>Entrantes</option>
                      <option value="Pizzas">Pizzas</option>
                      <option value="Arroces">Arroces</option>
                      <option value="Ensaladas">Ensaladas</option>
                      <option value="Pastas">Pastas</option>
                      <option value="Postres">Postres</option>
                      <option value="Bebidas">Bebidas</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="ingredients">Ingredientes</label>
                    <textarea type="text" class="form-control" id="ingredients" name="ingredients" rows="5" value="{{ old('ingredients') }}" required></textarea>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.1" min="1" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="image">Imagen</label>
                    <input type="file" class="form-control" id="file"  onchange="getBaseUrl()" accept=".png, .jpg, .jpeg" required>
                    <input type="hidden" id="image" name="image" value="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Confirmar</button>
            <a href="{{ route('dishes.index') }} " class="btn btn-outline-primary">Regresar a listado de platos</a>
        </div>
    </form>

@endsection

<script>
  function getBaseUrl ()  {
    var image = document.querySelector('#image64')
    var file = document.querySelector('input[type=file]')['files'][0];
    var reader = new FileReader();
    var baseString;
    reader.onloadend = function () {
        baseString = reader.result;
        // file.setValue();
        document.getElementById("image").value = baseString; 
        console.log(baseString); 
    };
    reader.readAsDataURL(file);
}
</script>
