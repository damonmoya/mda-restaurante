@extends('layout')

@section('title', "Nuestra carta")

@section('content')

<body class="menu-content">

    <div class="container">

    @if ( \Session::has('success') )
        <div class="alert alert-success alert-dismissable" id="notification" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>¡Se ha añadido <strong> {{ \Session::get('success') }}</strong> correctamente!</div>
    @endif
    
    <div class="menu-title">
        <h2>Nuestros productos recomendados</h2>
    </div>
    <h3 class="menu-section-title">Entrantes</h3>
    <div class="row">
        @foreach($entrantes as $entrante)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card my-3">
                    <a href="{{ route('dishes.show', [$entrante->idProduct]) }}">
                    <img src="{{ $entrante->image }}" class="card-img-top"  width="240" height="206" alt="{{ $entrante->name }}" >
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $entrante->name }}</h5>
                        <p class="card-text menu-ingredients">{{ $entrante->ingredients }} </p>

                        <form method="POST" action="{{route('cart.store')}}">
                            @csrf
                            <div class="form-group">
                                <!--<label for="id">ID</label>-->
                                <input type="hidden" value="{{ $entrante->idProduct }}" name="id" class="form-control" id="id">
                            </div>
                            <div class="form-group">
                                <!--<label for="name">NOMBRE</label>-->
                                <input type="hidden" value="{{ $entrante->name }}" name="name" class="form-control" id="name">
                            </div>
                            <div class="price-quantity">
                            <div class="form-group form-price">
                                <label for="price">PRECIO</label>
                                <input type="text" readOnly value="{{ $entrante->price }}" name="price" class="form-control" id="price">
                            </div>
                            <div class="form-group form-quantity">
                                <label for="quantity">CANTIDAD</label>
                                <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                            </div>
                            </div>
                            <button type="submit" class="button btn btn-warning">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="menu-section-title">Pizzas</h3>
    <div class="row">
        @foreach($pizzas as $pizza)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card my-3">
            <a href="{{ route('dishes.show', [$pizza->idProduct]) }}">
                <img src="{{ $pizza->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
            </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $pizza->name }}</h5>
                    <p class="card-text menu-ingredients">{{ $pizza->ingredients }} </p>

                    <form method="POST" action="{{route('cart.store')}}">
                        @csrf
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $pizza->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $pizza->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="price-quantity">
                        <div class="form-group form-price">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $pizza->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group form-quantity">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        </div>
                        <button type="submit" class="button btn btn-warning">Agregar al carrito</button>
                    </form>
                </div>
            </div>
            </div>
        @endforeach
    </div>

    <h3 class="menu-section-title">Arroces</h3>
    <div class="row">
        @foreach($arroces as $arroz)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card my-3">
                <a href="{{ route('dishes.show', [$arroz->idProduct]) }}">
                <img src="{{ $arroz->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $arroz->name }}</h5>
                    <p class="card-text menu-ingredients">{{ $arroz->ingredients }} </p>

                    <form method="POST" action="{{route('cart.store')}}">
                        @csrf
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $arroz->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $arroz->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="price-quantity">
                        <div class="form-group form-price">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $arroz->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group form-quantity">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        </div>
                        <button type="submit" class="button btn btn-warning">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="menu-section-title">Ensaladas</h3>
    <div class="row">
        @foreach($ensaladas as $ensalada)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card my-3">
                <a href="{{ route('dishes.show', [$ensalada->idProduct]) }}">
                <img src="{{ $ensalada->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $ensalada->name }}</h5>
                    <p class="card-text menu-ingredients">{{ $ensalada->ingredients }} </p>

                    <form method="POST" action="{{route('cart.store')}}">
                        @csrf
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $ensalada->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $ensalada->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="price-quantity">
                        <div class="form-group form-price">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $ensalada->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group form-quantity">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        </div>
                        <button type="submit" class="button btn btn-warning">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="menu-section-title">Pastas</h3>
    <div class="row">
        @foreach($pastas as $pasta)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card my-3">
                <a href="{{ route('dishes.show', [$pasta->idProduct]) }}">
                <img src="{{ $pasta->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $pasta->name }}</h5>
                    <p class="card-text menu-ingredients">{{ $pasta->ingredients }} </p>

                    <form method="POST" action="{{route('cart.store')}}">
                        @csrf
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $pasta->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $pasta->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="price-quantity">
                        <div class="form-group form-price">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $pasta->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group form-quantity">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        </div>
                        <button type="submit" class="button btn btn-warning">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="menu-section-title">Postres</h3>
    <div class="row">
        @foreach($postres as $postre)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card my-3">
                <a href="{{ route('dishes.show', [$postre->idProduct]) }}">
                    <img src="{{ $postre->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $postre->name }}</h5>
                        <p class="card-text menu-ingredients">{{ $postre->ingredients }} </p>

                        <form method="POST" action="{{route('cart.store')}}">
                            @csrf
                            <div class="form-group">
                                <!--<label for="id">ID</label>-->
                                <input type="hidden" value="{{ $postre->idProduct }}" name="id" class="form-control" id="id">
                            </div>
                            <div class="form-group">
                                <!--<label for="name">NOMBRE</label>-->
                                <input type="hidden" value="{{ $postre->name }}" name="name" class="form-control" id="name">
                            </div>
                            <div class="price-quantity">
                            <div class="form-group form-price">
                                <label for="price">PRECIO</label>
                                <input type="text" readOnly value="{{ $postre->price }}" name="price" class="form-control" id="price">
                            </div>
                            <div class="form-group form-quantity">
                                <label for="quantity">CANTIDAD</label>
                                <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                            </div>
                            </div>
                            <button type="submit" class="button btn btn-warning">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="menu-section-title">Bebidas</h3>
    <div class="row">
        @foreach($bebidas as $bebida)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card my-3">
                <a href="{{ route('dishes.show', [$bebida->idProduct]) }}">
                <img src="{{ $bebida->image }}" class="card-img-top" width="240" height="206" alt="{{ $entrante->name }}" >
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $bebida->name }}</h5>
                    <p class="card-text menu-ingredients">{{ $bebida->ingredients }} </p>

                    <form method="POST" action="{{route('cart.store')}}">
                        @csrf
                        <div class="form-group">
                            <!--<label for="id">ID</label>-->
                            <input type="hidden" value="{{ $postre->idProduct }}" name="id" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <!--<label for="name">NOMBRE</label>-->
                            <input type="hidden" value="{{ $postre->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="price-quantity">
                        <div class="form-group form-price">
                            <label for="price">PRECIO</label>
                            <input type="text" readOnly value="{{ $postre->price }}" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group form-quantity">
                            <label for="quantity">CANTIDAD</label>
                            <input type="number" min="1" max="20" value="1" name="quantity" class="form-control" id="quantity">
                        </div>
                        </div>
                        <button type="submit" class="button btn btn-warning">Agregar al carrito</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</body>
</html>
@endsection
