@extends('layout')

@section('title', "Mi pedido")

@section('content')
<html>
    <body class="pedido-content">
        
        <div class="pedido-container">
                
            <div>
                <h1>Pedido</h1>  
            @if (!Cart::isEmpty())
                    <table class="table table-dark table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th sc ope="col">Accion</th>
                                <!--<th sc ope="col">#ID</th>-->
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::getContent() as $item)
                                <tr>
                                    <th scope="row">
                                        <form method="POST" action="{{route('cart.destroy',$item->id)}}">
                                           @method('DELETE')
                                           @csrf
                                           <button type="submit" class="btn btn-danger">Eliminar</button>
                                       </form>
                                    </th>
                                    <!--<th scope="row">{{$item->id}}</th>-->
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->quantity}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

            <div>
                @if (auth()->check())
                    <?php $user = auth()->user(); ?>
                    <div class="container pedido-form">
                        <h4>Confirmar datos usuario</h4>

                        {{--Sección de formulario--}}
                        <form>
                            <fieldset style="border:none;">
                                {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Nombre</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="surname">Apellidos</label>
                                                <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}" required>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="phone">Teléfono de contacto</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="address">Dirección de envío</label>
                                                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="postalCode">C.P.</label>
                                                <input type="text" class="form-control" id="postalCode" name="postalCode" value="{{ $user->postalCode }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            
                            <div class="row">
                                <div class="col">
                                    <button type="button" width="100%" class="btn btn-primary btn-lg btn-block">Confirmar pedido</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>

                
        </div>
    </body>
</html>
@endsection