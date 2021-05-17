@extends('layout')

@section('title', "Editar nuevo plato")

@section('content')
    <div class="container">
    <h2>Ver nuevo plato</h2>

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
    <form method="POST" action="#">
    <fieldset disabled style="border:none;">
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
                    <label for="image">Imagen</label></br>
                    <img class="img-fluid" src="{{$dish->image}}" style="width:70%">
                </div>
            </div>
        </div>
      </fieldset>
    </form>
    <p>
        @hasrole('Administrator')
            <a href="{{ route('dishes.index') }} " class="btn btn-outline-primary">Regresar al listado de platos</a>
        @else
            <a href="{{ route('menu') }} " class="btn btn-outline-danger">Regresar al menú</a>
        @endhasrole
    </p>
    </div>
@endsection