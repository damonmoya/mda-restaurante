@extends('layout')

@section('title', "Mi pedido")

@section('content')
<html>
    <body class="pedido-content">
        
        @if ( \Session::has('success_create_order') )
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>¡Ha realizado su pedido correctamente!</div>
        @endif
        
        @if( \Session::has('success_deleted_order') )
            <div class="alert alert-warning alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>Su pedido ha sido <strong>cancelado</strong> correctamente.</div>
        @endif



        <div class="pedido-container">
                
            <div>
                <h1>Pedido</h1>  
            @if (!Cart::isEmpty())
                    <table class="table table-dark table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Accion</th>
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
                            <tr>
                                <th></th>
                                <th>Impuestos</th>
                                <th>IGIC</th>
                                <th>7%</th>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th></th>
                                <th></th>
                                @php
                                    $total = 0;
                                    foreach (Cart::getContent() as $item) {
                                        $total += $item->price;
                                    }
                                    $total += $total*0.07;
                                    echo "<th> $total € </th>";
                                @endphp
                            </tr>
                        </tbody>
                    </table>
                
            </div>

            <div>
                @if (auth()->check())
                    <?php $user = auth()->user(); ?>
                    <div class="container pedido-form">
                        <h4>Confirmar datos usuario</h4>

                        {{-- Sección de formulario para confirmar pedido --}}
                        <form method="POST" action="{{route('create_pedido')}}">
                            @csrf
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

                                    @php
                                        $date_actual = date("Y-m-d")."T".date("H:i", strtotime(date("H:i")."+ 1 hour"));
                                    @endphp
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="date_delivery">Fecha de envío</label>
                                                <input type="datetime-local" class="form-control" id="date_delivery" name="date_delivery" value="{{$date_actual }}"
                                                min="{{$date_actual}}" max="2023-06-14T00:00" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="total"></label>
                                                <input type="hidden" class="form-control" id="total" name="total" value="{{ $total }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            
                            <div class="row">
                                <div class="col">
                                    <button type="submit" width="100%" class="btn btn-primary btn-lg btn-block">Confirmar y realizar pedido</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>

            @else
                Su carrito se encuentra vacío actualmente
            @endif
        
        
            <div>
                <h2>Pedidos en curso</h2>
                @if ($data[0])
                    
                    <table class="table table-dark table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Cancelar pedido</th>
                                <th scope="col">ID pedido</th>
                                <th scope="col">Fecha de entrega</th>
                                <th scope="col">Dirección de entrega</th>
                                <th scope="col">Coste</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data[0] as $item)
                                <tr>
                                    <th scope="row">
                                        <form method="POST" action="{{route('delete_pedido')}}">
                                        @csrf
                                        <input type="hidden" class="form-control" id="idOrder" name="idOrder" value="{{$item->idOrder}}">
                                        <button type="submit" class="btn btn-danger">Cancelar</button>
                                    </form>
                                    </th>
                                    <td>{{$item->idOrder}}</td>
                                    <td>{{$item->date_delivery}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->cost}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Actualmente no hay pedidos en curso</p>
                @endif
            </div>

            <div>
                <h2>Histórico de pedidos</h2>
                @if ($data[1])
                    
                    <table class="table table-dark table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID pedido</th>
                                <th scope="col">Fecha de entrega</th>
                                <th scope="col">Dirección de entrega</th>
                                <th scope="col">Coste</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data[1] as $item)
                                <tr>
                                    <td>{{$item->idOrder}}</td>
                                    <td>{{$item->date_delivery}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->cost}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Actualmente no hay pedidos en curso</p>
                @endif
            </div>
    </div>
    </body>
</html>
@endsection