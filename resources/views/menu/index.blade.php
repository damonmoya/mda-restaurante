@extends('layout')

@section('title', "Nuestra carta")

@section('content')
    <div class="container">
    <h3>Entrantes</h3>
    <div class="row">
        @foreach($entrantes as $entrante)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                    <a href="{{ route('dishes.show', [$entrante->idProduct]) }}">
                    <img src="{{ $entrante->image }}" class="card-img-top"  width="240" height="206" alt="{{ $entrante->name }}" >
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $entrante->name }}</h5>
                        <p class="card-text">{{ $entrante->ingredients }} </p>

                        <form>
                            <div class="form-group">
                                <!--<label for="id">ID</label>-->
                                <input type="hidden" value="{{ $entrante->idProduct }}" name="id" class="form-control" id="id">
                            </div>
                            <div class="form-group">
                                <!--<label for="name">NOMBRE</label>-->
                                <input type="hidden" value="{{ $entrante->name }}" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="price">PRECIO</label>
                                <input type="text" readOnly value="{{ $entrante->price }}" name="price" class="form-control" id="price">
                            </div>
                            <div class="form-group">
                                <label for="quantity">CANTIDAD</label>
                                <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Pizzas</h3>
    <div class="row">
        @foreach($pizzas as $pizza)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
            <a href="{{ route('dishes.show', [$pizza->idProduct]) }}">
                <img src="{{ $pizza->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
            </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $pizza->name }}</h5>
                    <p class="card-text">{{ $pizza->ingredients }} </p>

                    <form>
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $pizza->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $pizza->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $pizza->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </form>
                </div>
            </div>
            </div>
        @endforeach
    </div>

    <h3>Arroces</h3>
    <div class="row">
        @foreach($arroces as $arroz)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$arroz->idProduct]) }}">
                <img src="{{ $arroz->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $arroz->name }}</h5>
                    <p class="card-text">{{ $arroz->ingredients }} </p>

                    <form>
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $arroz->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $arroz->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $arroz->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Ensaladas</h3>
    <div class="row">
        @foreach($ensaladas as $ensalada)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$ensalada->idProduct]) }}">
                <img src="{{ $ensalada->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $ensalada->name }}</h5>
                    <p class="card-text">{{ $ensalada->ingredients }} </p>

                    <form>
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $ensalada->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $ensalada->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $ensalada->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Pastas</h3>
    <div class="row">
        @foreach($pastas as $pasta)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$pasta->idProduct]) }}">
                <img src="{{ $pasta->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $pasta->name }}</h5>
                    <p class="card-text">{{ $pasta->ingredients }} </p>

                    <form>
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $pasta->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $pasta->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $pasta->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Postres</h3>
    <div class="row">
        @foreach($postres as $postre)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$postre->idProduct]) }}">
                    <img src="{{ $postre->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $postre->name }}</h5>
                        <p class="card-text">{{ $postre->ingredients }} </p>

                        <form>
                            <div class="form-group">
                                <!--<label for="id">ID</label>-->
                                <input type="hidden" value="{{ $postre->idProduct }}" name="id" class="form-control" id="id">
                            </div>
                            <div class="form-group">
                                <!--<label for="name">NOMBRE</label>-->
                                <input type="hidden" value="{{ $postre->name }}" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="price">PRECIO</label>
                                <input type="text" readOnly value="{{ $postre->price }}" name="price" class="form-control" id="price">
                            </div>
                            <div class="form-group">
                                <label for="quantity">CANTIDAD</label>
                                <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3>Bebidas</h3>
    <div class="row">
        @foreach($bebidas as $bebida)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card mt-3">
                <a href="{{ route('dishes.show', [$bebida->idProduct]) }}">
                <img src="{{ $bebida->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $bebida->name }}</h5>
                    <p class="card-text">{{ $bebida->ingredients }} </p>

                    <form>
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $postre->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $postre->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $postre->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection